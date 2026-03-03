<?php
header('Content-Type: application/json');

// 统一设置时区，防止日期判断错误
date_default_timezone_set('Asia/Shanghai');

require_once 'config.php';

// 定义签到数据文件路径
define('CHECKIN_FILE', dirname(__DIR__) . '/data/checkin.php');
define('CHECKIN_LOCK_FILE', dirname(__DIR__) . '/data/checkin.lock');

// 获取当前登录用户
$token = str_replace('Bearer ', '', $_SERVER['HTTP_AUTHORIZATION'] ?? '');
$sessions = secureReadData(SESSIONS_FILE);
$username = null;

if (isset($sessions[$token])) {
    $username = $sessions[$token]['username'];
}

if (!$username) {
    echo json_encode(['success' => false, 'message' => '未登录或登录已过期']);
    exit;
}

// 读取用户数据
$users = secureReadData(USERS_FILE);
$user = $users[$username] ?? null;

if (!$user) {
    echo json_encode(['success' => false, 'message' => '用户不存在']);
    exit;
}

// 检查邮箱是否已验证
if (!isset($user['email_verified']) || !$user['email_verified']) {
    echo json_encode(['success' => false, 'message' => '请先完成邮箱验证']);
    exit;
}

// 读取签到数据（统一使用安全读取函数）
$checkinData = secureReadData(CHECKIN_FILE);
$userCheckin = $checkinData[$username] ?? ['last_checkin' => null, 'streak' => 0];

$today = date('Y-m-d');
$lastCheckinDate = $userCheckin['last_checkin'] ? date('Y-m-d', strtotime($userCheckin['last_checkin'])) : null;

// 处理GET请求，用于获取签到状态
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo json_encode([
        'success' => true,
        'last_checkin' => $userCheckin['last_checkin'],
        'streak' => $userCheckin['streak'],
        'already_checked_in' => $lastCheckinDate === $today,
        'points' => $user['points'] ?? 0
    ]);
    exit;
}

// 处理POST请求，用于执行签到
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 并发锁处理：使用文件排他锁
    $lockFp = fopen(CHECKIN_LOCK_FILE, 'w+');
    if (!$lockFp) {
        echo json_encode(['success' => false, 'message' => '系统繁忙，请稍后再试']);
        exit;
    }

    // 尝试获取锁（阻塞式）
    if (flock($lockFp, LOCK_EX)) {
        // 获得锁后，必须重新读取一次最新数据，以防止在等待锁期间数据已被其他进程修改
        $users = secureReadData(USERS_FILE);
        $checkinData = secureReadData(CHECKIN_FILE);
        $userCheckin = $checkinData[$username] ?? ['last_checkin' => null, 'streak' => 0];
        
        $lastCheckinDate = $userCheckin['last_checkin'] ? date('Y-m-d', strtotime($userCheckin['last_checkin'])) : null;

        if ($lastCheckinDate === $today) {
            flock($lockFp, LOCK_UN);
            fclose($lockFp);
            echo json_encode(['success' => false, 'message' => '今日已签到']);
            exit;
        }

        $yesterday = date('Y-m-d', strtotime('-1 day'));

        if ($lastCheckinDate === $yesterday) {
            // 连续签到
            $userCheckin['streak']++;
        } else {
            // 断签，重置为1
            $userCheckin['streak'] = 1;
        }

        $userCheckin['last_checkin'] = date('Y-m-d H:i:s');
        $checkinData[$username] = $userCheckin;

        // 积分奖励逻辑：基础10积分 + 连续签到奖励（连续天数 * 2）
        $pointsEarned = 10 + ($userCheckin['streak'] * 2);
        if (!isset($users[$username]['points'])) {
            $users[$username]['points'] = 0;
        }
        $users[$username]['points'] += $pointsEarned;

        // 保存数据（此时仍持有锁）
        $res1 = secureWriteData(CHECKIN_FILE, $checkinData);
        $res2 = secureWriteData(USERS_FILE, $users);

        // 释放锁
        flock($lockFp, LOCK_UN);
        fclose($lockFp);

        if (!$res1 || !$res2) {
            echo json_encode(['success' => false, 'message' => '数据保存失败']);
            exit;
        }

        echo json_encode([
            'success' => true,
            'message' => "签到成功！获得 {$pointsEarned} 积分",
            'streak' => $userCheckin['streak'],
            'last_checkin' => $userCheckin['last_checkin'],
            'points' => $users[$username]['points']
        ]);
        exit;
    } else {
        fclose($lockFp);
        echo json_encode(['success' => false, 'message' => '无法获取系统锁，请重试']);
        exit;
    }
}

echo json_encode(['success' => false, 'message' => '无效的请求方法']);
?>