<?php
require_once 'config.php';
require_once 'helper.php';
require_once 'secure_data.php';
require_once __DIR__ . '/../includes/security_logger.php';

$securityLog = SecurityLogger::getInstance();

// 设置 CORS 和安全头
set_cors_headers();
set_security_headers();

// 确保 sessions.php 文件存在
if (!file_exists(SESSIONS_FILE)) {
    $content = "<?php\n";
    $content .= "if (!defined('ACCESS_ALLOWED')) {\n";
    $content .= "    header('HTTP/1.1 403 Forbidden');\n";
    $content .= "    exit;\n";
    $content .= "}\n\n";
    $content .= "return [];\n";
    $content .= "?>";
    file_put_contents(SESSIONS_FILE, $content);
}

// 只允许 POST 请求
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    json_response(false, '只允许 POST 请求', null, 405);
}

$data = get_post_data();
$username = trim($data['username'] ?? '');
$password = $data['password'] ?? '';

// 验证输入
if (empty($username) || empty($password)) {
    json_response(false, '用户名和密码不能为空', null, 400);
}

// 读取用户数据
$users = secureReadData(USERS_FILE);

// 验证用户
if (!isset($users[$username])) {
    $securityLog->logLoginFailure($username, '用户不存在');
    json_response(false, '用户名或密码错误', null, 401);
}

$user = $users[$username];

// 检查账户是否被锁定
if (isset($user['lock_until']) && strtotime($user['lock_until']) > time()) {
    $remaining = ceil((strtotime($user['lock_until']) - time()) / 60);
    $securityLog->logLoginFailure($username, "账户已锁定，剩余 {$remaining} 分钟");
    json_response(false, "账户已锁定，请 {$remaining} 分钟后再试", null, 429);
}

// 验证密码
if (!password_verify($password, $user['password'])) {
    // 记录失败次数
    $users[$username]['login_attempts'] = ($users[$username]['login_attempts'] ?? 0) + 1;
    $attempts = $users[$username]['login_attempts'];
    
    // 超过5次锁定15分钟
    if ($users[$username]['login_attempts'] >= 5) {
        $users[$username]['lock_until'] = date('Y-m-d H:i:s', time() + 900);
        secureWriteData(USERS_FILE, $users);
        $securityLog->logAccountLocked($username, "连续登录失败 {$attempts} 次");
        json_response(false, '登录失败次数过多，账户已锁定15分钟', null, 429);
    }
    
    secureWriteData(USERS_FILE, $users);
    $securityLog->logLoginFailure($username, "密码错误 (第 {$attempts} 次)");
    json_response(false, '用户名或密码错误', null, 401);
}

// 登录成功，重置失败次数
$users[$username]['login_attempts'] = 0;
$users[$username]['lock_until'] = null;
secureWriteData(USERS_FILE, $users);

// 记录登录成功
$securityLog->logLoginSuccess($username, [
    'role' => $user['role'] ?? 'user'
]);

// 创建会话
$sessions = secureReadData(SESSIONS_FILE);

// FIFO会话清理：如果会话数量超过限制，删除最旧的会话
if (count($sessions) >= MAX_SESSIONS) {
    // 按创建时间排序，找到最旧的会话
    uasort($sessions, function($a, $b) {
        return strtotime($a['created_at']) - strtotime($b['created_at']);
    });
    
    // 删除最旧的会话（第一个）- 兼容 PHP 7.2
    reset($sessions);
    $oldestToken = key($sessions);
    unset($sessions[$oldestToken]);
}

// 添加新会话
$token = generate_uuid();
$sessions[$token] = [
    'user_id' => $user['id'],
    'username' => $user['username'],
    'role' => $user['role'] ?? 'user',
    'created_at' => date('Y-m-d H:i:s')
];

if (!secureWriteData(SESSIONS_FILE, $sessions)) {
    json_response(false, '会话创建失败', null, 500);
}

// 构建用户数据
$user_data = [
    'id' => $user['id'],
    'username' => $user['username'],
    'email' => $user['email'],
    'role' => $user['role'],
    'email_verified' => !empty($user['email_verified']),
    'points' => $user['points'] ?? 0
];

// 如果启用了邮箱验证且未验证，添加提示
$message = '登录成功';
if (EMAIL_VERIFICATION_ENABLED && !empty($user['email']) && empty($user['email_verified'])) {
    $message = '登录成功，请验证您的邮箱以使用全部功能';
}

// 返回成功响应
json_response(true, $message, [
    'token' => $token,
    'user' => $user_data,
    'email_verification' => [
        'enabled' => EMAIL_VERIFICATION_ENABLED,
        'verified' => !empty($user['email_verified'])
    ]
], 200);
?>
