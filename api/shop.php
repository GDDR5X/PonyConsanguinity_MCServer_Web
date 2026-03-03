<?php
header('Content-Type: application/json');

require_once 'config.php';

// 定义商品数据文件路径
define('SHOP_ITEMS_FILE', dirname(__DIR__) . '/data/shop_items.php');

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

// 处理GET请求，获取商品列表
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $shopItems = secureReadData(SHOP_ITEMS_FILE);
    echo json_encode([
        'success' => true,
        'items' => $shopItems,
        'points' => $user['points'] ?? 0
    ]);
    exit;
}

// 处理POST请求，执行兑换
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $itemId = $data['item_id'] ?? '';

    if (!$itemId) {
        echo json_encode(['success' => false, 'message' => '请选择要兑换的商品']);
        exit;
    }

    // 读取商品数据
    $shopItems = secureReadData(SHOP_ITEMS_FILE);
    $item = null;
    foreach ($shopItems as $shopItem) {
        if ($shopItem['id'] === $itemId) {
            $item = $shopItem;
            break;
        }
    }

    if (!$item) {
        echo json_encode(['success' => false, 'message' => '商品不存在']);
        exit;
    }

    // 检查积分是否足够
    $userPoints = $user['points'] ?? 0;
    if ($userPoints < $item['price']) {
        echo json_encode(['success' => false, 'message' => '积分不足']);
        exit;
    }

    // 扣除积分
    $users[$username]['points'] = $userPoints - $item['price'];

    // 保存用户数据
    if (!secureWriteData(USERS_FILE, $users)) {
        echo json_encode(['success' => false, 'message' => '数据保存失败']);
        exit;
    }

    // 这里可以添加兑换记录的逻辑，例如保存到数据库或日志文件

    echo json_encode([
        'success' => true,
        'message' => '兑换成功！',
        'item' => $item,
        'remaining_points' => $users[$username]['points']
    ]);
    exit;
}

echo json_encode(['success' => false, 'message' => '无效的请求方法']);
?>