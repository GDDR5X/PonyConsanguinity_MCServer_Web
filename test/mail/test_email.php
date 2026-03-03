<?php
highlight_string("<?php\n");
echo "<h1>邮件发送测试</h1>\n";
echo "<h2>服务器环境检查</h2>\n";

// 检查 PHP 版本
echo "<p><strong>PHP 版本:</strong> " . PHP_VERSION . "</p>\n";

// 检查 openssl 扩展
echo "<p><strong>OpenSSL 扩展:</strong> " . (extension_loaded('openssl') ? '<span style="color: green;">✓ 已启用</span>' : '<span style="color: red;">✗ 未启用</span>') . "</p>\n";

// 检查 mbstring 扩展
echo "<p><strong>mbstring 扩展:</strong> " . (extension_loaded('mbstring') ? '<span style="color: green;">✓ 已启用</span>' : '<span style="color: red;">✗ 未启用</span>') . "</p>\n";

// 检查是否可以连接到 SMTP 服务器
echo "<h2>SMTP 连接测试</h2>\n";

try {
    require_once 'config/config.php';
    require_once 'includes/mail_helper.php';
    
    echo "<p><strong>SMTP 配置:</strong></p>\n";
    echo "<ul>\n";
    echo "<li>服务器: " . SMTP_HOST . "</li>\n";
    echo "<li>端口: " . SMTP_PORT . "</li>\n";
    echo "<li>加密: " . SMTP_ENCRYPTION . "</li>\n";
    echo "<li>发件人: " . MAIL_FROM_EMAIL . "</li>\n";
    echo "<li>发件人名称: " . MAIL_FROM_NAME . "</li>\n";
    echo "</ul>\n";
    
    // 测试连接
    $mailHelper = MailHelper::getInstance();
    
    // 生成测试验证链接
    $testToken = bin2hex(random_bytes(16));
    $testVerifyLink = SITE_URL . '/pages/verify.html?token=' . $testToken;
    
    echo "<h2>发送测试邮件</h2>\n";
    
    // 发送测试邮件
    $testEmail = '1257158482@qq.com'; // 目标邮箱
    $testUsername = 'Test User';
    
    echo "<p>正在发送测试邮件到: <strong>$testEmail</strong></p>\n";
    
    $result = $mailHelper->sendVerificationEmail($testEmail, $testUsername, $testVerifyLink);
    
    echo "<h3>发送结果:</h3>\n";
    echo "<pre>" . print_r($result, true) . "</pre>\n";
    
    if ($result['success']) {
        echo "<p style='color: green; font-weight: bold;'>✓ 邮件发送成功！</p>\n";
        echo "<p>请检查您的邮箱（包括垃圾箱）是否收到验证邮件。</p>\n";
    } else {
        echo "<p style='color: red; font-weight: bold;'>✗ 邮件发送失败</p>\n";
        echo "<p>错误信息: " . $result['message'] . "</p>\n";
        
        // 提供解决方案
        echo "<h3>解决方案:</h3>\n";
        echo "<ol>\n";
        echo "<li>启用 PHP 的 openssl 扩展</li>\n";
        echo "<li>使用 SSL/TLS 加密（端口 465 或 587）</li>\n";
        echo "<li>检查 SMTP 授权码是否正确</li>\n";
        echo "<li>确认 QQ 邮箱已开启 SMTP 服务</li>\n";
        echo "</ol>\n";
    }
    
} catch (Throwable $e) {
    echo "<p style='color: red; font-weight: bold;'>✗ 测试失败</p>\n";
    echo "<p>错误信息: " . $e->getMessage() . "</p>\n";
    echo "<pre>" . $e->getTraceAsString() . "</pre>\n";
}

echo "<h2>建议配置</h2>\n";
echo "<p>对于 QQ 邮箱，推荐配置：</p>\n";
echo "<pre>define('SMTP_PORT', 465);\ndefine('SMTP_ENCRYPTION', 'ssl');\n</pre>\n";
echo "<p>然后启用 PHP 的 openssl 扩展。</p>\n";

echo "<h2>手动验证方法</h2>\n";
echo "<p>如果邮件发送失败，您可以：</p>\n";
echo "<ol>\n";
echo "<li>在个人中心点击 '发送验证邮件' 按钮</li>\n";
echo "<li>复制弹出的验证链接到浏览器</li>\n";
echo "<li>完成验证</li>\n";
echo "</ol>\n";
?>
