# 万驹同源服务器官网

<p align="center">
  <img src="/assets/img/pc_logo2.png" alt="万驹同源" width="800" style="max-width: 100%; height: auto;">
</p>


<p align="center">
  <img src="https://img.shields.io/badge/PHP-8.0+-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP Version">
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5">
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3">
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript">
  <img src="https://img.shields.io/badge/License-MIT-green?style=for-the-badge" alt="License">
  <img src="https://img.shields.io/badge/Version-5.6-blue?style=for-the-badge" alt="Version">
  <img src="https://img.shields.io/badge/Status-Active-success?style=for-the-badge" alt="Status">
</p>

<p align="center">
  <a href="#项目简介">项目简介</a> •
  <a href="#功能特性">功能特性</a> •
  <a href="#技术栈">技术栈</a> •
  <a href="#项目结构">项目结构</a> •
  <a href="#快速开始">快速开始</a> •
  <a href="#使用指南">使用指南</a> •
  <a href="#开发指导">开发指导</a> •
  <a href="#贡献指南">贡献指南</a>
</p>


---

## 项目简介


**万驹同源（PonyConsanguinity）官网**是一个专属于万驹同源 Minecraft 服务器官网，致力于为广大玩家提供优质的社区环境，拥有以下功能：

<p align="center">
  <img src="https://img.shields.io/badge/功能-20+-blue?style=for-the-badge" alt="Features">
  <img src="https://img.shields.io/badge/页面-20+-green?style=for-the-badge" alt="Pages">
  <img src="https://img.shields.io/badge/API-24+-orange?style=for-the-badge" alt="APIs">
  <img src="https://img.shields.io/badge/组件-5+-purple?style=for-the-badge" alt="Components">
  <img src="https://img.shields.io/badge/代码行数-5000+-red?style=for-the-badge" alt="Lines of Code">
</p>

- **服务器介绍**：详细的服务器信息和玩法介绍
- **论坛系统**：支持Markdown格式的帖子发布和回复；也包含服务器规则、公告等内容
- **用户系统**：注册、登录和个人中心，同时分为管理员和普通用户
- **服务器状态**：实时服务器状态监控，包含性能数据图表
- **性能监控**：记录和展示服务器性能数据（玩家人数、CPU、内存使用率）
- **音乐播放器**：内置音乐播放器（闲着没事加上去的x）

---

## 功能

- **实时状态监控**：查看服务器在线人数、CPU、内存使用情况
- **性能数据图表**：通过 MCSManager API展示服务器性能变化趋势
- **玩家经济排行**：展示玩家经济排行
- **论坛系统**：支持 Markdown 格式的帖子发布和回复
- **帖子分类**：支持帖子分类标签，方便内容组织
- **用户系统**：注册、登录、个人中心
- **公告系统**：管理员可发布和管理公告
- **音乐播放器**：内置音乐播放器，支持进度控制
- **图片画廊**：展示服务器风采
- **卫星地图**：实时查看服务器卫星地图，支持玩家位置追踪
- **皮肤站**：自定义玩家皮肤
- **充值系统**：爱发电支付集成，支持黄金券自动充值功能
- **邮箱验证系统**：支持邮箱验证功能


```
PC_Web/
├── api/               # PHP API 接口
│   ├── forum.php      # 论坛相关 API
│   ├── login.php      # 登录 API
│   ├── register.php   # 注册 API
│   ├── performance.php # 性能数据记录 API
│   ├── get_performance.php # 性能数据获取 API
│   └── ...            # 其他 API 接口
├── assets/            # 静态资源
│   ├── img/           # 图片资源
│   └── music/         # 音乐资源
├── components/        # 可复用组件
│   ├── navbar.html    # 导航栏
│   ├── footer.html    # 页脚
│   └── sidebar-player.html # 音乐播放器
├── config/            # 配置文件目录 
│   └── config.php     # 统一配置文件
├── css/               # 样式文件
│   ├── style.css      # 主样式
│   └── ...            # 其他样式文件
├── data/              # 数据文件
│   ├── posts.php      # 帖子数据
│   ├── users.php      # 用户数据
│   └── ...            # 其他数据文件
├── js/                # JavaScript 文件
│   ├── api.js         # API 客户端
│   ├── main.js        # 主脚本
│   └── ...            # 其他脚本文件
├── pages/             # 页面文件
│   ├── forum.html     # 论坛页面
│   ├── status.html    # 状态页面
│   └── ...            # 其他页面
├── test/              # 测试文件
│   ├── test_token.php # 令牌验证测试脚本
│   └── ...            # 其他测试脚本
├── index.html         # 首页
├── log.md             # 日志
└── README.md          # 说明


```

## 技术栈

### 后端技术

- **PHP 8.0+**：后端服务器脚本语言
- **JSON**：数据存储和交换格式

### 前端技术

- **HTML5**：页面结构
- **CSS3**：样式和动画
- **JavaScript**：交互逻辑
- **Markdown**：内容格式化

### 第三方库

- **Chart.js**：数据可视化图表库
- **Font Awesome**：图标字体库
- **Marked**：Markdown解析库
- **Highlight.js**：代码块语法高亮库
- **PowerShell.js**：PowerShell样式代码块高亮


---

## 快速开始

### 环境要求

- **本地开发**：任意静态文件服务器
- **生产部署**：支持 PHP 的 Web 服务器（如 Apache、Nginx）
- **浏览器**：现代浏览器（Chrome、Firefox、Edge 等）

**注意**：请配置好php.ini，开启各种扩展，如openssl、mysqli、curl、pdo_mysql等。你可以参考目录`config/`下的示例配置文件。

### 本地开发

1. **克隆项目**

   ```bash
   git clone https://github.com/GoldenApplePie404/PonyConsanguinity_MCServer_Web.git
   cd PC_Web
   ```

2. **启动本地服务器**

   - 使用 PHP 内置服务器

     ```bash
     php -S localhost:8000
     ```

   - 或使用其他静态文件服务器（如 VS Code的Live Server 扩展，这边不推荐使用vs code的live server，因为它会导致一些问题，如果你刚好有python环境，建议使用python的http.server模块）

3. **访问网站**

   打开浏览器访问 `http://localhost:8000`

### 生产部署

1. **准备服务器**

   - 确保服务器安装了 PHP 8.0+
   - 配置 Web 服务器

2. **上传文件**

   将项目文件上传到服务器的 Web 根目录

3. **配置**

   **前端配置**：
   - 项目已使用统一配置文件 `js/config.js`，会自动根据环境检测并设置正确的 API 地址
   - 本地开发环境（localhost/127.0.0.1）会自动使用 `http://localhost:8000`
   - 生产环境会自动使用相对路径 `/api`，无需手动修改配置
   - 如需自定义配置，可编辑 `js/config.js` 文件中的相关配置项

   **后端配置**：
   - 所有后端配置已迁移到 `config/config.php`
   - 编辑 `config/config.php` 配置数据库、API 密钥等信息
   - 详细配置说明请参考「系统配置指南」部分

4. **访问网站**

   打开浏览器访问服务器域名

---

## 安全配置

### 概述

本项目包含敏感数据（用户信息、帖子内容等），必须采取适当的安全措施来保护这些数据。

### 核心安全机制

本项目实施了全面的数据系统安全性增强措施，通过多层防护机制保护敏感数据，防止未授权访问和数据泄露。

#### 1. PHP文件包装机制

**原理**：将部分数据从JSON文件转换为PHP文件，利用PHP的访问控制特性防止直接HTTP访问。

**实现方式**：

- 原始JSON文件（如`users.json`）转换为`users.php`
- PHP文件头部添加访问控制检查
- 数据以PHP数组形式存储，通过`include`语句读取

**示例代码**（users.php）：

```php
<?php
if (!defined('ACCESS_ALLOWED')) {
    header('HTTP/1.1 403 Forbidden');
    exit;
}

return array (
  'GoldenApplePie' => 
  array (
    'id' => 'ed2f1a94-0b92-4f86-83f8-29cdbaf65671',
    'username' => 'GoldenApplePie',
    'password' => '$2y$10$0Fg81IaiXfzMiypsdMd/EODV57XXU3YBsfttxHT2Pnc13dnLWv1LW',
    'email' => '2928433540@qq.com',
    'email_verified' => true,
    'verify_token' => '330f9684be73e4ec17668bc2533c3eecf4979320b1fd666b113c3c7317eebe61',
    'verify_expires' => '2026-03-02 09:12:46',
    'verify_sent_at' => '2026-03-01 09:12:46',
    'verify_resend_count' => 23,
    'created_at' => '2026-03-01 07:57:21',
    'role' => 'admin',
    'login_attempts' => 0,
    'lock_until' => NULL,
  ),
);
?>
```

**安全效果**：

- 直接访问`/data/users.php`会返回403 Forbidden
- 只有定义了`ACCESS_ALLOWED`常量的PHP脚本才能读取数据
- 防止了通过浏览器直接查看敏感数据的风险

#### 2. 访问控制常量

**常量定义**：在`api/config.php`中定义全局访问控制常量。

```php
// 定义访问常量
define('ACCESS_ALLOWED', true);
```

**使用方式**：

- 所有需要访问敏感数据的API文件必须先引入`config.php`
- 引入后自动定义`ACCESS_ALLOWED`常量
- 数据文件检查此常量是否存在

**安全流程**：

```
API请求 → 引入config.php → 定义ACCESS_ALLOWED → 访问数据文件 → 验证常量 → 允许访问
```

#### 3. 安全数据访问函数

**函数定义**：在`api/secure_data.php`中提供统一的数据访问接口。

**核心函数**：

##### verifyDataAccess()

```php
function verifyDataAccess($requireToken = true) {
    if (!$requireToken) {
        return;
    }
    $token = $_GET['token'] ?? $_SERVER['HTTP_X_DATA_TOKEN'] ?? '';
    if ($token !== DATA_ACCESS_TOKEN) {
        header('HTTP/1.1 403 Forbidden');
        exit;
    }
}
```

**功能**：

- 验证数据访问令牌
- 可配置是否强制要求令牌验证

##### 令牌安全建议

⚠️ **重要**：`DATA_ACCESS_TOKEN` 是系统的重要安全组件，请务必：

1. **修改默认令牌**：将 `api/secure_data.php` 中的默认值 `your-secret-token-here` 替换为强随机值
2. **使用强令牌**：使用尽量长的随机字符串，包含大小写字母、数字和特殊字符
3. **定期更换**：定期更新令牌值，保障系统安全性
4. **妥善保管**：不要将令牌提交到代码仓库或分享给未授权人员
5. **访问控制**：只在必要的操作中使用 `requireToken = true`，避免过度使用

**生成强令牌的方法**：

```bash
# 使用PHP生成
php -r "echo bin2hex(random_bytes(32));"
```

**示例强令牌**：

```
8f42a73e6b9f4c8d9e2a3b4c5d6e7f8a9b0c1d2e3f4a5b6c7d8e9f0a1b2c3d4e
```

##### 令牌验证测试

为了验证数据访问令牌的功能，项目提供了测试脚本，位于 `test/` 目录：

**测试脚本**：

- `test/test_token.php` - 命令行测试脚本
- `test/test_token_api.php` - API端点测试脚本

**使用方法**：

1. **启动本地服务器**：

   ```bash
   php -S localhost:8000
   ```

2. **测试不提供令牌**：

   ```powershell
   Invoke-WebRequest -Uri "http://localhost:8000/test/test_token_api.php" -UseBasicParsing
   # 预期结果：403 Forbidden
   ```

3. **测试提供正确的令牌**：

   ```powershell
   Invoke-WebRequest -Uri "http://localhost:8000/test/test_token_api.php?token=YOUR_TOKEN_HERE" -UseBasicParsing
   # 预期结果：200 OK，返回成功信息
   ```

4. **测试提供错误的令牌**：

   ```powershell
   Invoke-WebRequest -Uri "http://localhost:8000/test/test_token_api.php?token=wrong-token" -UseBasicParsing
   # 预期结果：403 Forbidden
   ```

5. **测试不需要令牌的接口**：

   ```powershell
   Invoke-WebRequest -Uri "http://localhost:8000/test/test_token_api.php?action=public" -UseBasicParsing
   # 预期结果：200 OK，返回成功信息
   ```

**注意**：将 `YOUR_TOKEN_HERE` 替换为你在 `api/secure_data.php` 中设置的实际令牌值。

##### secureReadData()

```php
function secureReadData($file, $requireToken = false) {
    verifyDataAccess($requireToken);
    if (file_exists($file)) {
        return include $file;
    }
    return [];
}
```

**功能**：

- 安全读取数据文件
- 自动进行令牌验证（可选）
- 使用`include`语句读取PHP文件
- 文件不存在时返回空数组

##### secureWriteData()

```php
function secureWriteData($file, $data, $requireToken = false) {
    verifyDataAccess($requireToken);
    $dir = dirname($file);
    if (!file_exists($dir)) {
        mkdir($dir, 0755, true);
    }
    // 对于 PHP 文件，使用 include 格式写入
    $content = "<?php\n";
    $content .= "if (!defined('ACCESS_ALLOWED')) {\n";
    $content .= "    header('HTTP/1.1 403 Forbidden');\n";
    $content .= "    exit;\n";
    $content .= "}\n\n";
    $content .= "return " . var_export($data, true) . ";\n";
    $content .= "?>";
    file_put_contents($file, $content);
}
```

**功能**：

- 安全写入数据文件
- 自动创建目录（如果不存在）
- 自动添加访问控制头部
- 使用`var_export()`确保数据格式正确

**使用示例**：

```php
// 读取用户数据
$users = secureReadData(USERS_FILE);

// 写入会话数据
$sessions[$token] = $userData;
secureWriteData(SESSIONS_FILE, $sessions);
```

#### 4. 目录保护

**保护机制**：在`data/`目录下创建了`index.php`文件。

**安全效果**：

- 防止目录列表泄露
- 访问`/data/`返回403错误
- 保护目录结构信息

#### 5. 会话管理

**FIFO会话清理**：系统实现了先进先出（FIFO）的会话清理机制。

**配置**：

```php
// 会话配置
define('MAX_SESSIONS', 10);
```

**工作原理**：

- 每次用户登录时，系统会检查当前会话数量
- 如果会话数量达到或超过`MAX_SESSIONS`，系统会删除最旧的会话
- 然后添加新的会话，始终保持会话数量不超过限制

#### 6. API模式配置

**配置文件**：`js/api.js`

**关键设置**：

```javascript
// 强制使用真实API模式
USE_MOCK_MODE = false;
console.log('使用真实 API 模式，因为系统中已安装 PHP');
```

**功能说明**：

- `USE_MOCK_MODE = false`：使用真实PHP API
- `USE_MOCK_MODE = true`：使用模拟数据（开发测试用）
- 系统会自动检测API可用性

**API请求流程**：

```
前端请求 → api.js → 检查USE_MOCK_MODE →
真实API: 发送到PHP后端 → secureReadData() → 读取数据 → 返回结果
Mock模式: 返回模拟数据 → 直接返回结果
```

### 数据文件结构

#### 转换后的PHP文件

| 原始文件 | 转换后文件 | 用途 |
|---------|-----------|------|
| `users.json` | `users.php` | 用户数据（用户名、密码、邮箱等） |
| `sessions.json` | `sessions.php` | 会话数据（登录令牌、用户信息） |
| `posts.json` | `posts.php` | 帖子数据（帖子列表、内容） |

#### 保留的JSON文件

| 文件 | 用途 | 安全措施 |
|------|------|---------|
| `notifications.json` | 系统通知 | 通过API访问，目录保护 |
| `user_notifications/{username}.json` | 用户已读通知 | 通过API访问，目录保护 |
| `replies/{post_id}.json` | 帖子回复 | 通过API访问，目录保护 |
| `content/{timestamp}.md` | 帖子内容 | 通过API访问，目录保护 |

### 安全架构图

```
┌─────────────────────────────────────────────────────────┐
│                     前端应用层                            │
│  (HTML/CSS/JavaScript)                                  │
└────────────────────┬────────────────────────────────────┘
                     │
                     │ HTTP请求
                     ▼
┌─────────────────────────────────────────────────────────┐
│                   API网关层                              │
│  (api/*.php)                                            │
│  - 引入config.php (定义ACCESS_ALLOWED)                   │
│  - 引入secure_data.php (提供安全访问函数)                  │
└────────────────────┬────────────────────────────────────┘
                     │
                     │ 验证令牌 + 定义常量
                     ▼
┌─────────────────────────────────────────────────────────┐
│                  安全访问层                               │
│  (secure_data.php)                                      │
│  - verifyDataAccess() (令牌验证)                         │
│  - secureReadData() (安全读取)                           │
│  - secureWriteData() (安全写入)                          │
└────────────────────┬────────────────────────────────────┘
                     │
                     │ include访问
                     ▼
┌─────────────────────────────────────────────────────────┐
│                   数据存储层                              │
│  (data/*.php)                                           │
│  - 检查ACCESS_ALLOWED常量                                │
│  - 返回PHP数组数据                                        │
└─────────────────────────────────────────────────────────┘
```

### 安全测试

#### 测试用例

**测试1：直接访问数据文件**

```bash
# 预期结果：403 Forbidden
curl http://localhost:8000/data/users.php
```

**测试2：通过API访问数据**

```bash
# 预期结果：成功返回数据
curl -H "Authorization: Bearer {token}" \
     http://localhost:8000/api/notification.php?action=list
```

**测试3：目录列表保护**

```bash
# 预期结果：403 Forbidden
curl http://localhost:8000/data/
```

**测试4：通知功能测试**

```bash
# 预期结果：成功返回通知列表
curl -H "Authorization: Bearer {token}" \
     http://localhost:8000/api/notification.php?action=list
```

### 安全优势

1. **多层防护**：PHP文件包装 + 访问控制常量 + 令牌验证
2. **最小权限原则**：只有定义了常量的API才能访问数据
3. **防止直接访问**：所有敏感文件都无法通过HTTP直接访问
4. **统一接口**：通过`secure_data.php`提供统一的数据访问接口
5. **灵活配置**：可配置是否强制要求令牌验证
6. **易于维护**：代码结构清晰，便于后续扩展

---

## 认证系统安全增强

### 概述

项目对注册登录系统进行了全面的安全加强，实现了现代 Web 应用的安全标准。

### 安全特性

#### 1. 密码安全存储

**技术**：使用 PHP `password_hash()` 函数（bcrypt 算法）

**实现**：
- 用户密码使用 bcrypt 算法哈希存储
- 自动处理盐值，每次哈希结果不同
- 使用 `password_verify()` 验证密码

**安全效果**：
- 即使数据库泄露，攻击者也无法直接获取明文密码
- 彩虹表攻击无效
- 符合现代安全标准

#### 2. 登录失败限制

**机制**：账户锁定策略

**配置**：
- 最大尝试次数：5 次
- 锁定时间：15 分钟

**实现**：
```php
// 验证密码
if (!password_verify($password, $user['password'])) {
    // 记录失败次数
    $users[$username]['login_attempts'] = ($users[$username]['login_attempts'] ?? 0) + 1;
    
    // 超过5次锁定15分钟
    if ($users[$username]['login_attempts'] >= 5) {
        $users[$username]['lock_until'] = date('Y-m-d H:i:s', time() + 900);
    }
}
```

**安全效果**：
- 防止暴力破解攻击
- 防止字典攻击
- 保护弱密码用户

#### 3. 密码复杂度要求

**规则**：
- 最小长度：8 位
- 必须包含：大写字母、小写字母、数字
- 可选：特殊字符

**实现**：
```php
if (strlen($password) < 8) {
    return '密码长度至少为8位';
}
if (!preg_match('/[A-Z]/', $password)) {
    return '密码必须包含大写字母';
}
if (!preg_match('/[a-z]/', $password)) {
    return '密码必须包含小写字母';
}
if (!preg_match('/[0-9]/', $password)) {
    return '密码必须包含数字';
}
```

**安全效果**：
- 提高密码强度
- 减少被猜测风险

#### 4. 安全日志系统

**功能**：记录所有认证相关事件

**日志内容**：
- 登录成功/失败
- 用户注册
- 用户注销
- 账户删除
- 账户锁定
- 安全告警

**日志信息**：
- 时间戳
- IP 地址
- 设备信息（浏览器、操作系统）
- 事件详情

**日志文件**：`logs/security/auth_YYYYMMDD.log`

**示例日志**：
```
[2026-03-01 10:30:15] [info] [登录成功] 用户: xxx | 角色: admin | IP: 127.0.0.1 | 设备: Chrome/Windows/Desktop
[2026-03-01 10:31:20] [warning] [登录失败] 用户: xxx | IP: 127.0.0.1 | 原因: 密码错误 | 设备: Chrome/Windows
[2026-03-01 10:32:00] [error] [账户锁定] 用户: xxx | IP: 127.0.0.1 | 原因: 连续登录失败 5 次
```

**安全效果**：
- 审计追踪
- 异常检测
- 安全分析

#### 5. 异常登录检测

**检测项**：
- 频繁登录失败（1小时内超过3次）
- IP 地址变化

**实现**：
```php
// 检测频繁登录失败
if ($recentFailures >= 3) {
    $this->logSecurityAlert($username, '频繁登录失败', [
        'failures_in_hour' => $recentFailures
    ]);
}

// 检测IP变化
if ($lastSuccess['ip'] !== $currentIP) {
    $this->logSecurityAlert($username, 'IP地址变化', [
        'previous_ip' => $lastSuccess['ip'],
        'current_ip' => $currentIP
    ]);
}
```

**安全效果**：
- 及时发现可疑登录
- 预警潜在攻击

### 安全测试

项目包含安全测试工具，位于 `safe_test/` 目录：

| 工具 | 功能 |
|------|------|
| `scanner.php` | 安全漏洞扫描 |
| `test_brute_force.php` | 暴力破解测试 |
| `test_sql_injection.php` | SQL 注入测试 |
| `test_xss.php` | XSS 漏洞测试 |

**运行测试**：
```bash
php safe_test/scanner.php
```

---

## 使用指南

### 论坛系统

#### 发布帖子

1. 点击导航栏中的「论坛」进入论坛页面
2. 点击「发布新帖」按钮
3. 填写标题和内容（支持 Markdown 格式）
4. 点击「发布」按钮

#### 回复帖子

1. 进入帖子详情页面
2. 在回复框中输入内容（支持 Markdown 格式）
3. 点击「回复」按钮

### 音乐播放器

- **播放/暂停**：点击播放按钮
- **调整音量**：拖动音量滑块
- **进度控制**：点击进度条调整播放位置
- **切换歌曲**：点击歌曲列表中的歌曲（这些歌曲全身本人自行编的曲，不喜勿喷！）

### 用户系统

#### 注册

1. 点击导航栏中的「登录/注册」
2. 选择「注册」选项卡
3. 填写用户名、邮箱和密码
4. 点击「注册」按钮
5. 注册时不能使用已存在的用户名

#### 登录

1. 点击导航栏中的「登录/注册」
2. 选择「登录」选项卡
3. 填写用户名和密码
4. 点击「登录」按钮

#### 注销

1. 进入用户个人中心页面
2. 选择「注销」选项卡
3. 输入密码确认注销

### 公告系统

#### 公告管理工具

管理员可以通过公告管理工具页面（`tools/announcement-manager.html`）进行公告的添加、编辑和删除操作。

##### 访问方式

1. 以管理员身份登录系统
2. 在管理面板中找到「公告管理」选项
3. 点击进入公告管理工具页面

##### 功能说明

1. **公告列表**：查看所有已发布的公告，显示标题、类型、作者、日期等信息
2. **添加公告**：创建新公告，填写公告ID、标题、类型、作者、发布日期、摘要和内容
3. **编辑公告**：修改现有公告的内容，包括标题、类型、作者、发布日期、摘要和内容
4. **删除公告**：删除不需要的公告
5. **预览功能**：实时预览 Markdown 格式的公告内容

##### 添加公告

1. 在「添加公告」标签页中填写所有必填字段
2. 使用 Markdown 格式编写公告内容
3. 点击「保存公告」按钮
4. 系统会显示成功提示，并自动刷新公告列表

##### 编辑公告

1. 在「编辑公告」标签页中选择要编辑的公告
2. 修改需要更新的字段
3. 点击「保存修改」按钮
4. 系统会显示成功提示，并自动刷新公告列表

##### 删除公告

1. 在「公告列表」标签页中找到要删除的公告
2. 点击「删除」按钮
3. 确认删除操作
4. 系统会显示成功提示，并自动刷新公告列表

##### 数据存储

- 公告元数据存储在 `data/announcements.json` 文件中
- 公告内容存储在 `data/content/announcements/` 目录下的 Markdown 文件中
- 系统会自动创建和管理这些文件

##### 注意事项

- 公告ID必须唯一，建议使用小写字母和连字符
- 公告内容支持完整的 Markdown 语法
- 保存公告后会自动创建对应的 Markdown 文件
- 请确保有足够的文件读写权限

### 卫星地图系统

#### 功能说明

卫星地图系统提供了实时的服务器地图查看功能，使用[Dynmap](https://github.com/webbukkit/dynmap)插件实现，支持玩家位置追踪、地图缩放等高级功能。

#### 访问方式

访问 `pages/map.html` 页面即可查看卫星地图。

#### 配置说明

地图地址配置在 `pages/map.html` 中：

```html
<iframe src="http://115.231.176.218:11823/"></iframe>
```

如需修改地图地址，请修改iframe的src属性。

#### 注意事项

- 确保地图服务器正常运行
- 加载动画会在地图加载完成后自动消失
- 支持移动端自适应显示

### 充值系统

#### 功能说明

充值系统集成了[爱发电](https://afdian.com/)支付平台，支持玩家通过爱发电进行黄金券充值，系统会自动处理订单并更新玩家的黄金券数量。

#### 核心特性

- **爱发电支付集成**：支持通过爱发电平台进行支付
- **自动订单处理**：支付成功后自动更新玩家黄金券
- **多重更新模式**：支持webhook实时通知和API定时检查
- **安全可靠**：采用事务处理和幂等性设计，确保订单处理的可靠性
- **详细日志**：完整的操作日志，便于问题排查

#### 访问方式

访问 `pages/payment.html` 页面即可进入充值中心。

#### 配置说明

##### 爱发电配置

**v5.6+ 版本更新**：爱发电配置现在统一在 `config/config.php` 中管理。

配置文件：`config/config.php`

```php
// ==================== 爱发电 API 配置 ====================
define('AFDIAN_USER_ID', 'your-user-id'); // 从爱发电开发者后台获取
define('AFDIAN_API_TOKEN', 'your-api-token'); // 从爱发电开发者后台获取

// ==================== 爱发电订单更新模式配置 ====================
// 可选值: 'api' (纯API模式), 'webhook' (仅webhook模式), 'all' (webhook为主，API为辅)
define('AFDIAN_ORDER_UPDATE_MODE', 'all');

// ==================== 爱发电自动定时任务配置 ====================
define('AFDIAN_CRON_ENABLED', true);          // 是否启用自动定时任务
define('AFDIAN_CRON_INTERVAL', 120);          // 执行间隔（秒），120秒=2分钟
define('AFDIAN_CRON_MAX_TIME', 300);          // 单次执行最长时间（秒）
define('AFDIAN_CRON_LOG_LEVEL', 'info');      // 日志级别：debug, info, error

// ==================== 爱发电方案/商品ID配置 ====================
define('AFDIAN_PLAN_GOLDEN_TICKET', 'your-golden-ticket-plan-id'); // 黄金券充值商品ID
define('AFDIAN_PLAN_VIP_MONTH', 'your-vip-month-plan-id');         // VIP月卡商品ID
define('AFDIAN_PLAN_VIP_YEAR', 'your-vip-year-plan-id');           // VIP年卡商品ID

// ==================== 爱发电 Webhook 配置 ====================
define('AFDIAN_WEBHOOK_VERIFY_SIGN', true); // 是否验证签名

// ==================== 爱发电日志配置 ====================
define('AFDIAN_LOG_DIR', dirname(__DIR__) . '/logs');
define('AFDIAN_LOG_LEVEL', 'info');
define('AFDIAN_LOG_MODULE', 'aifadian');
```

**向后兼容**：`api/aifadian/config.php` 仍然存在，但它现在只是返回 `get_afdian_config()` 函数的结果，确保旧代码可以正常工作。

##### Webhook配置

在爱发电开发者后台设置webhook地址：

```
https://your-domain.com/api/aifadian/api/webhook.php
```

#### 使用流程

1. **访问充值页面**：进入 `pages/payment.html`
2. **选择套餐**：选择要购买的黄金券套餐
3. **选择数量**：选择购买数量（1-10份）
4. **确认购买**：点击「确认支付」按钮
5. **跳转到爱发电**：系统会跳转到爱发电支付页面
6. **完成支付**：在爱发电平台完成支付
7. **自动到账**：支付成功后，系统会自动更新玩家的黄金券数量，整个过程无需任何服务器插件

#### 管理功能

##### 自动更新管理

访问 `tools/auto_update.html` 页面可以管理自动更新功能：

- **开启自动更新**：自动定期检查和处理新订单
- **手动更新**：立即检查和处理新订单
- **查看日志**：查看自动更新的执行日志

#### 日志系统

充值系统的日志存储在 `logs/` 目录：

- `logs/webhook_*.log` - Webhook处理日志
- `logs/aifadian_webhook_*.log` - 订单处理日志
- `logs/aifadian_process_*.log` - 定时任务处理日志
- `logs/aifadian_auto_*.log` - 自动更新日志

#### 基本原理

爱发电提供了webhook接口，当有新订单时，会向配置的webhook地址发送POST请求，包含订单详情。充值系统通过webhook接口实时接收订单信息，并根据配置自动更新玩家的黄金券数量。同时爱发电还提供了API接口，充值系统也可以通过API接口定时检查新订单。这为充值系统提供了基础的订单处理功能。再鉴于我们可以通过网页后端操作数据库，只要将相关逻辑（如数据库的连接、操作等）与爱发电的订单信息进行关联，就可以实现自动更新玩家的黄金券数量。

#### 注意事项

- 在初次部署充值系统时一定一定一定要先在auto_update.html中手动更新一次，以初始化数据库，否则后续的订单更新将无法正常工作。
- 建议在config.php中开启混合模式（all）
- 此充值系统依赖于爱发电平台以及你的MC服务器数据库（尤其是要有playerpoints插件），确保两者正常运行才能正常工作。
- 此充值系统仅依赖于playerpoints插件的数据库，不依赖于任何其他MC服务器插件。当然，你可以仿造此架构完成一些其它的功能，比如玩家的VIP系统（如理论上也可以实现使用luckperms插件的数据库）

#### 补充

- 爱发电平台：[https://afdian.com/](https://afdian.com/)
- 爱发电开发者功能汇总：[https://afdian.com/p/010ff078177211eca44f52540025c377](https://afdian.com/p/010ff078177211eca44f52540025c377)

### 邮箱验证系统配置

#### 功能说明

邮箱验证系统实现了用户邮箱验证功能，支持两种运行模式：
- **本地开发模式**：直接返回验证链接，方便开发和测试
- **生产部署模式**：使用 SMTP 发送真实验证邮件

系统会自动检测运行环境并选择合适的模式。

#### 配置文件

**后端配置**：`config/config.php`

```php
// ==================== 邮件 SMTP 配置 ====================
// 是否启用邮箱验证功能
define('EMAIL_VERIFICATION_ENABLED', true);

// SMTP 服务器配置
define('SMTP_HOST', 'smtp.qq.com');           // SMTP服务器地址
define('SMTP_PORT', 465);                      // SMTP端口（SSL: 465, TLS: 587）
define('SMTP_USERNAME', 'your-email@qq.com');  // 发件人邮箱
define('SMTP_PASSWORD', 'your-auth-code');     // 邮箱授权码（不是登录密码）
define('SMTP_ENCRYPTION', 'ssl');              // 加密方式：ssl、tls 或空字符串
define('SMTP_AUTH', true);                     // 是否启用SMTP认证

// 发件人信息
define('MAIL_FROM_EMAIL', 'your-email@qq.com');
define('MAIL_FROM_NAME', '万驹同源服务器');

// 验证邮件配置
define('VERIFY_TOKEN_EXPIRY', 86400);          // 验证令牌有效期（秒）默认24小时
define('VERIFY_RESEND_INTERVAL', 600);         // 重新发送间隔（秒）默认10分钟
define('VERIFY_MAX_RESEND', 3);                // 每小时最大重发次数
```

**前端配置**：`js/config.js`

```javascript
emailVerification: {
    // 本地开发环境：使用手动验证链接（方便测试）
    // 生产环境：使用真实邮件发送
    useManualVerification: ENV.isLocalhost,
    
    // 验证邮件发送间隔（秒）
    resendInterval: 60,
    
    // 验证令牌有效期（秒）
    tokenExpiry: 86400
}
```

#### 运行模式

##### 本地开发模式

**环境检测**：访问地址为 `localhost` 或 `127.0.0.1`

**特点**：
- 不发送真实邮件
- 直接返回验证链接
- 用户手动复制链接到浏览器验证
- 适合开发和测试

**流程**：
1. 用户点击"发送验证邮件"
2. 系统生成验证令牌并保存
3. 返回验证链接（通过弹窗显示）
4. 用户复制链接到浏览器
5. 完成验证

如果你想在本地模式下测试邮箱发送功能，可以利用test/mail/test_email.php脚本。

##### 生产部署模式

**环境检测**：访问地址为其他域名

**特点**：
- 使用 SMTP 发送真实邮件
- 用户通过邮件中的按钮验证
- 需要配置正确的 SMTP 服务器
- 适合生产环境

**流程**：
1. 用户点击"发送验证邮件"
2. 系统生成验证令牌并保存
3. 使用 PHPMailer 发送验证邮件
4. 用户收到邮件，点击验证按钮
5. 完成验证

#### 邮件模板

邮件模板文件：`includes/email_templates/verify_email.html`

**模板变量**：
- `{site_name}` - 站点名称
- `{username}` - 用户名
- `{verify_url}` - 验证链接
- `{expiry_hours}` - 过期小时数

**自定义模板**：
1. 编辑 `includes/email_templates/verify_email.html`
2. 保留变量占位符
3. 修改样式和内容

#### 相关页面

- **个人中心**：`pages/profile.html` - 显示验证状态，发送验证邮件
- **验证结果页**：`pages/verify.html` - 显示验证结果，自动跳转

#### 相关 API

- **发送验证邮件**：`api/resend_verify_email.php`
- **验证令牌**：`api/verify_email.php`
- **检查验证状态**：`api/check_verify_status.php`

#### 用户数据结构

验证相关字段存储在 `data/users.php` 中：

```php
'username' => [
    'email' => 'user@example.com',
    'email_verified' => false,              // 验证状态
    'verify_token' => '64位随机令牌',        // 验证令牌
    'verify_expires' => '2026-03-02 09:12:46',  // 过期时间
    'verify_sent_at' => '2026-03-01 09:12:46',  // 发送时间
    'verify_resend_count' => 1,             // 重发次数
]
```

#### 安全特性

1. **令牌安全**：64位随机令牌，24小时有效期
2. **频率限制**：60秒内只能发送一次验证邮件
3. **一次性使用**：验证成功后令牌立即失效
4. **数据保护**：使用 `secureReadData` 和 `secureWriteData` 安全读写

#### 如何配置SMTP

我们以QQ邮箱为例，配置SMTP服务器如下：

1. 登录QQ邮箱，点击“设置” -> “账户”
2. 找到“SMTP服务”，开启SMTP服务并获取授权码
3. 在config/config.php配置SMTP服务器信息：
   - 主机：`smtp.qq.com`
   - 端口：`465`（SSL）或`587`（TLS）
   - 用户名：你的QQ邮箱地址
   - 密码：SMTP授权码
   - 加密：`ssl`或`tls`
   - 认证：`true`

### 页面列表

#### 概述

项目包含多个功能页面，每个页面都有特定的功能和用途。以下是所有页面的完整列表和功能说明。

#### 页面分类

##### 核心页面

- **index.html** - 网站首页，展示服务器主要信息和导航

##### 游戏功能页面

- **pages/map.html** - 卫星地图页面，实时查看服务器地图和玩家位置(使用[Dynmap](https://github.com/webbukkit/dynmap)插件实现)
- **pages/skin.html** - 皮肤站页面，自定义玩家皮肤和披风（这边建议采用[Blessing Skin Server](https://github.com/bs-community/blessing-skin-server)进行搭建）
- **pages/survival.html** - 生存服页面，介绍生存玩法和特色功能
- **pages/playerpoints.html** - playerpoints插件数据库连接测试，已弃用

##### 社区功能页面

- **pages/forum.html** - 论坛首页，浏览和发布帖子
- **pages/post-detail.html** - 帖子详情页，查看帖子内容和回复
- **pages/announcement.html** - 公告列表页，查看服务器公告
- **pages/announcement-detail.html** - 公告详情页，查看公告详细内容

##### 用户功能页面

- **pages/login.html** - 登录页面，用户登录
- **pages/profile.html** - 个人中心，管理个人信息
- **pages/status.html** - 服务器状态页，查看服务器实时状态 （注：黄金券排行榜采用的是[playerpoints](https://modrinth.com/plugin/playerpoints/version/3.2.7)插件的数据库，如果你想实现类似的功能，需要具体在插件中配置）

##### 管理功能页面

- **pages/logs.html** - 开发日志页，查看项目开发历程
- **pages/rules.html** - 服务器规则页，查看游戏规则
- **pages/payment.html** - 充值中心页，黄金券充值功能（已开发，集成爱发电支付）
- **pages/verify.html** - 邮箱验证结果页，显示验证成功/失败状态

##### 法律页面

- **pages/privacy-policy.html** - 隐私政策页，了解隐私保护政策
- **pages/user-agreement.html** - 用户协议页，了解使用条款
- **pages/disclaimer.html** - 免责声明页，了解责任限制

##### 其他页面

- **pages/404.html** - 404错误页面，页面未找到提示
- **pages/db_test.html** - 数据库测试页面
- **pages/template-example.html** - 页面模板示例

### 性能优化

#### 概述

项目采用了多种性能优化策略，确保网站在各种设备上都能快速加载和流畅运行。

#### 资源加载优化

##### 图片预加载

关键图片资源使用预加载技术，提前加载重要图片：

```html
<link rel="preload" href="../assets/img/survival.png" as="image">
<link rel="preload" href="../assets/img/1.png" as="image">
```

##### 懒加载

非关键资源使用懒加载技术，延迟加载直到用户需要时才加载：

```html
<img src="placeholder.jpg" data-src="actual-image.jpg" loading="lazy" alt="描述">
```

#### CSS优化

##### 模块化加载

CSS文件按模块拆分，按需加载，减少不必要的样式加载：

```html
<link rel="stylesheet" href="../css/style.css?v=3.21">
<link rel="stylesheet" href="../css/forum.css?v=1.0">
```

##### 版本控制

使用版本号参数避免浏览器缓存问题：

```html
<link rel="stylesheet" href="../css/style.css?v=3.21">
```

#### JavaScript优化

##### 事件委托

使用事件委托减少事件监听器数量，提高性能：

```javascript
document.addEventListener('click', function(e) {
    if (e.target.matches('.tab')) {
        // 处理点击事件
    }
});
```

##### 防抖和节流

对频繁触发的事件使用防抖和节流技术：

```javascript
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}
```

#### 动画优化

##### CSS动画

使用CSS动画而非JavaScript动画，提高性能：

```css
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

.fade-in {
    animation: fadeIn 0.5s ease-in;
}
```

##### 硬件加速

使用transform和opacity属性启用硬件加速：

```css
.element {
    transform: translateZ(0);
    opacity: 1;
}
```

#### 网络优化

##### CDN加速

静态资源使用CDN加速，提高加载速度。

##### 压缩

CSS和JavaScript文件使用压缩版本，减少文件大小。

### UI组件

#### 概述

项目提供了多个可复用的UI组件，方便在不同页面中快速集成常用功能。

#### 组件列表

##### 侧边栏播放器

**功能**：音乐播放器，支持播放、暂停、进度控制、音量调节等功能。

**文件位置**：
- 组件模板：`components/sidebar-player.html`
- 样式文件：`css/sidebar-player.css`
- 脚本文件：`js/sidebar-player.js`

**使用方式**：

1. 在HTML中引入组件：

```html
<div id="app-sidebar-player"></div>
<script src="js/sidebar-player.js?v=3.0"></script>
```

2. 在body标签中添加组件标识：

```html
<body data-components="sidebarPlayer,backToTop,navbar,footer">
```

**添加歌曲**：

编辑 `components/sidebar-player.html` 文件，在播放列表中添加新歌曲：

```html
<div class="song-item" data-src="music/song.mp3" data-title="歌曲名称" data-artist="艺术家">
    <div class="song-info">
        <div class="song-title">歌曲名称</div>
        <div class="song-artist">艺术家</div>
    </div>
</div>
```

##### 返回顶部按钮

**功能**：当页面滚动到一定位置时显示，点击可快速返回页面顶部。

**文件位置**：
- 样式文件：`css/back-to-top.css`
- 脚本文件：`js/back-to-top.js`

**使用方式**：

1. 在HTML中引入样式和脚本：

```html
<link rel="stylesheet" href="../css/back-to-top.css?v=1.0">
<script src="../js/back-to-top.js?v=1.0"></script>
```

2. 在body标签中添加组件标识：

```html
<body data-components="sidebarPlayer,backToTop,navbar,footer">
```

**自定义配置**：

可以在 `js/back-to-top.js` 中修改以下配置：

```javascript
const config = {
    showOffset: 300,  // 滚动多少像素后显示按钮
    scrollSpeed: 500  // 返回顶部的滚动速度（毫秒）
};
```

##### 浮动按钮

**功能**：提供快捷操作的浮动按钮，如"创建帖子"、"返回论坛"等。

**实现方式**：

使用CSS固定定位实现：

```css
.floating-button {
    position: fixed;
    right: 20px;
    bottom: 90px;
    z-index: 999;
    /* 其他样式 */
}
```

**使用场景**：

- 论坛页面的"创建帖子"按钮
- 公告详情页的"返回论坛"按钮
- 帖子详情页的"滚动到回复"按钮

##### 导航栏

**功能**：网站主导航，提供页面间的快速跳转。

**使用方式**：

在body标签中添加组件标识：

```html
<body data-components="sidebarPlayer,backToTop,navbar,footer">
```

##### 页脚

**功能**：网站页脚，包含版权信息和链接。

**使用方式**：

在body标签中添加组件标识：

```html
<body data-components="sidebarPlayer,backToTop,navbar,footer">
```

#### 组件加载机制

项目使用自动组件加载机制，根据 `body` 标签的 `data-components` 属性自动加载对应的组件。

**示例**：

```html
<body data-components="sidebarPlayer,backToTop,navbar,footer">
```

这会自动加载以下组件：
- sidebarPlayer：侧边栏播放器
- backToTop：返回顶部按钮
- navbar：导航栏
- footer：页脚

#### 注意事项

- 确保组件的CSS和JS文件正确引入
- 组件ID必须与脚本中的选择器匹配
- 组件加载顺序可能影响功能，请按正确顺序引入

---

## 开发指导

### 画廊图片添加方法

#### 概述

本项目首页包含一个图片画廊，用于展示服务器风采。添加新图片需要修改两个文件：`index.html` 和 `css/style.css`。

#### 步骤1：在index.html中添加图片

在 `gallery-track` 中，你需要添加两次图片（第一组和第二组，用于无缝循环）：

**第一组位置**：在第254行之前添加

```html
<div class="gallery-item" data-title="图片标题" data-description="图片描述">
    <img src="assets/img/图片文件名.png" alt="图片标题">
    <div class="gallery-item-overlay">
        <div class="gallery-item-description">图片描述</div>
    </div>
</div>
```

**第二组位置**：在第339行之前添加（复制第一组的代码）

#### 步骤2：在css/style.css中更新动画距离

每添加一张图片，需要更新 `@keyframes scroll` 中的移动距离：

- 每张图片宽度：300px
- 左右边距：15px × 2 = 30px
- 单张图片总宽度：330px
- 动画移动距离 = 图片总数 × 330px

例如：

- 14张图片：4620px
- 15张图片：4950px
- 16张图片：5280px

在 `css/style.css` 的 `@keyframes scroll` 中修改：

```css
100% {
    transform: translateX(-4620px);
}
```

### 页面模板使用

#### 概述

本项目提供了统一的页面模板，用于创建符合网站风格的新页面，避免重复代码。所有页面都应遵循此模板结构。

#### 文件位置

模板文件位于：`pages/template-example.html`

#### 使用方法

1. 复制 `pages/template-example.html` 到 `pages/` 目录
2. 重命名为合适的文件名，如 `new-page.html`
3. 根据需要修改内容

#### 模板结构说明

##### 1. CSS样式引入

```html
<!-- ========== CSS样式文件引入 ========== -->
<link rel="stylesheet" href="../css/style.css?v=3.22">
<link rel="stylesheet" href="../css/sidebar-player.css?v=2.0">
<link rel="stylesheet" href="../css/back-to-top.css?v=1.0">
```

##### 2. 组件配置

```html
<!-- ========== body标签中的data-components属性 ========== -->
<!-- 可用组件：sidebarPlayer, backToTop, navbar, footer -->
<body data-components="sidebarPlayer,backToTop,navbar,footer">
```

根据页面需要，可以移除不需要的组件。

##### 3. Banner区域（可选）

如果页面需要Banner，使用以下代码，并添加 `common-banner` 类以确保统一的高度和布局：

```html
<!-- ========== Banner区域（可选） ========== -->
<section class="subpage-banner common-banner">
    <div class="subpage-banner-bg"></div>
    <div class="subpage-banner-particles"></div>
    <div class="container">
        <div class="subpage-banner-content">
            <h1 class="subpage-banner-title">页面标题</h1>
            <p class="subpage-banner-subtitle">副标题描述</p>
        </div>
    </div>
</section>
```

##### 4. 公共Banner类说明

本项目使用 `common-banner` 类来统一所有子页面的Banner样式：

- **适用范围**：所有子页面（论坛、状态页、皮肤站等），不包括首页
- **统一高度**：默认最小高度为350px
- **布局方式**：使用Flex布局居中内容
- **响应式设计**：使用min-height确保灵活性

**使用示例**：

```html
<!-- 论坛页面Banner -->
<section class="forum-banner common-banner">
    <!-- 内容 -->
</section>

<!-- 状态页面Banner -->
<section class="status-banner common-banner">
    <!-- 内容 -->
</section>

<!-- 皮肤站页面Banner -->
<section class="skin-header common-banner">
    <!-- 内容 -->
</section>
```

**注意**：首页使用独立的 `hero-banner` 类，高度为650px，不受此公共类影响。

##### 5. 主要内容区域

```html
<!-- ========== 主要内容区域 ========== -->
<div class="section">
    <div class="container">
        <!-- 在这里添加页面主要内容 -->
        <!-- 示例：卡片布局 -->
        <div class="card fade-in">
            <div class="card-header">
                <h2>卡片标题</h2>
            </div>
            <div class="card-body">
                <p>卡片内容...</p>
            </div>
        </div>
    </div>
</div>
```

##### 6. JavaScript脚本引入

**注意：引入顺序很重要，必须按照以下顺序**

```html
<!-- 1. API工具库（如果需要） -->
<script src="../js/api.js"></script>

<!-- 2. 主脚本（包含常用函数） -->
<script src="../js/main.js?v=3.5"></script>

<!-- 3. 回到顶部脚本 -->
<script src="../js/back-to-top.js?v=1.0"></script>

<!-- 4. 导航栏脚本 -->
<script src="../js/navbar.js?v=1.0"></script>

<!-- 5. 音乐播放器脚本 -->
<script src="../js/sidebar-player.js?v=3.0"></script>

<!-- 6. 组件加载器 -->
<script src="../components/loader.js?v=3.0"></script>
```

#### 常用组件说明

##### 卡片组件

```html
<div class="card fade-in">
    <div class="card-header">
        <h2>卡片标题</h2>
    </div>
    <div class="card-body">
        <p>卡片内容...</p>
    </div>
</div>
```

##### 动画效果

- `fade-in`：淡入效果
- `fade-in-delay-1`：延迟淡入（1级延迟）
- `fade-in-delay-2`：延迟淡入（2级延迟）
- 以此类推...

##### 按钮样式

```html
<!-- 主要按钮 -->
<button class="btn btn-primary">按钮文本</button>

<!-- 次要按钮 -->
<button class="btn btn-outline">按钮文本</button>

<!-- 小按钮 -->
<button class="btn btn-sm btn-primary">小按钮</button>
```

### 音乐播放器开发指导

#### 概述

音乐播放器是网站的一个核心组件，位于页面右侧边栏，提供音乐播放、进度控制、音量调节等功能。

#### 文件结构

```
PC_Web/
├── components/
│   └── sidebar-player.html  # 音乐播放器组件
├── css/
│   └── sidebar-player.css   # 音乐播放器样式
└── js/
    └── sidebar-player.js    # 音乐播放器脚本
```

#### 核心功能

1. **音乐播放控制**：播放/暂停、上一曲/下一曲
2. **进度控制**：进度条显示和点击调整
3. **音量调节**：音量滑块控制
4. **歌曲信息显示**：歌曲标题
5. **播放列表**：多首歌曲切换

#### 组件集成

在页面中集成音乐播放器组件：

```html
<!-- 音乐播放器 -->
<div id="app-sidebar-player"></div>
<script src="js/sidebar-player.js?v=3.0"></script>
```

同时，在body标签中添加对应的组件配置：

```html
<body data-components="sidebarPlayer,backToTop,navbar,footer">
```

#### 添加新歌曲

1. **添加音乐文件**：将音乐文件上传到 `assets/music/` 目录
2. **修改播放器组件**：编辑 `components/sidebar-player.html` 文件，在播放列表中添加新歌曲信息：

```html
<!-- 示例：添加新歌曲 -->
<div class="song-item" data-src="../assets/music/NewSong.mp3" data-title="新歌曲" data-artist="艺术家">
    <div class="song-title">新歌曲</div>
    <div class="song-artist">艺术家</div>
</div>
```

---

## 系统配置指南

### 统一配置文件 (config/config.php) ⭐ 推荐

#### 功能说明

**v5.6+ 版本更新**：项目已采用统一的配置文件架构，所有配置集中管理在 `config/config.php` 文件中。这是**推荐的配置方式**，提供了更好的安全性、可维护性和向后兼容性。

`config/config.php` 是项目的统一配置文件，包含了所有重要的系统配置：
- 数据库配置
- MCSManager API 配置
- 服务器状态 API 配置
- HTTPS 和 CORS 配置
- 会话和数据路径配置
- 爱发电 API 配置

#### 项目结构

```
PC_Web/
├── config/
│   ├── config.php              # 统一配置文件（所有配置集中在此）
│   ├── apache.htaccess.example # Apache 安全配置示例
│   └── nginx.conf.example      # Nginx 安全配置示例
├── api/
│   ├── config.php              # API 配置入口（引用统一配置）
│   ├── helper.php              # 辅助函数
│   └── secure_data.php         # 数据安全处理
└── ...
```

#### 配置项

```php
// ==================== 数据库配置 ====================
define('DB_HOST', 'xxx.xxx.xxx.xxx');
define('DB_PORT', 3306);
define('DB_NAME', 'database_name');
define('DB_USER', 'username');
define('DB_PASS', 'password');

// ==================== MCSManager API 配置 ====================
define('MCSM_API_URL', 'https://mcpanel.example.com/mcs/api');
define('MCSM_API_KEY', 'your-api-key');

// ==================== 服务器状态 API 配置 ====================
define('MCSTATUS_API_URL', 'http://mcstatus.example.com/api');
define('MC_SERVER_IP', 'mc.example.com');
define('MC_SERVER_PORT', 25565);

// ==================== HTTPS 配置 ====================
define('IS_HTTPS', true);

// ==================== CORS 配置 ====================
define('CORS_ALLOW_ORIGIN', '*');
define('CORS_ALLOW_METHODS', 'GET, POST, PUT, DELETE, OPTIONS');
define('CORS_ALLOW_HEADERS', 'Content-Type, Authorization, X-Requested-With');

// ==================== 会话配置 ====================
define('MAX_SESSIONS', 10);

// ==================== 数据文件路径配置 ====================
define('USERS_FILE', dirname(__DIR__) . '/data/users.php');
define('SESSIONS_FILE', dirname(__DIR__) . '/data/sessions.php');
define('POSTS_FILE', dirname(__DIR__) . '/data/posts.php');
define('NOTIFICATIONS_FILE', dirname(__DIR__) . '/data/notifications.php');
define('CONTENT_DIR', dirname(__DIR__) . '/data/content');
define('REPLIES_DIR', dirname(__DIR__) . '/data/replies');

// ==================== 爱发电 API 配置 ====================
define('AFDIAN_USER_ID', 'your-user-id');
define('AFDIAN_API_TOKEN', 'your-api-token');
define('AFDIAN_ORDER_UPDATE_MODE', 'all');
```

**配置说明**：

| 配置项 | 说明 | 示例值 |
|--------|------|---------|
| DB_HOST | 数据库主机地址 | xxx.xxx.xxx.xxx |
| DB_PORT | 数据库端口 | 3306 |
| DB_NAME | 数据库名称 | database_name |
| DB_USER | 数据库用户名 | username |
| DB_PASS | 数据库密码 | password |
| MCSM_API_URL | MCSManager API地址 | https://mcpanel.example.com/mcs/api |
| MCSM_API_KEY | MCSManager API密钥 | your-api-key |
| MCSTATUS_API_URL | 服务器状态API地址 | http://mcstatus.example.com/api |
| MC_SERVER_IP | Minecraft服务器IP | mc.example.com |
| MC_SERVER_PORT | Minecraft服务器端口 | 25565 |
| IS_HTTPS | 是否使用HTTPS | true |
| MAX_SESSIONS | 最大会话数量 | 10 |
| AFDIAN_USER_ID | 爱发电用户ID | your-user-id |
| AFDIAN_API_TOKEN | 爱发电API令牌 | your-api-token |

#### 辅助函数

统一配置文件提供了以下辅助函数，确保向后兼容：

```php
// 获取数据库配置数组
$config = get_db_config();
// 返回: ['hostname' => ..., 'port' => ..., 'database' => ..., 'username' => ..., 'password' => ...]

// 获取爱发电配置数组
$afdianConfig = get_afdian_config();
// 返回完整的爱发电配置数组

// 设置 CORS 响应头
set_cors_headers();

// 设置安全响应头
set_security_headers();
```

#### 自动初始化

`config/config.php` 会自动检查并创建必要的目录和文件：

- 确保 data 目录存在
- 确保 content 目录存在
- 确保 replies 目录存在
- 确保 logs 目录存在
- 如果用户、会话、帖子或通知文件不存在，会自动创建


#### 修改配置

1. **打开配置文件**：使用文本编辑器打开 `config/config.php`
2. **修改配置项**：根据需要修改相应的配置值
3. **保存文件**：保存修改后的文件
4. **无需重启**：PHP 配置会在下次请求时自动加载

---

### 旧版配置文件 (api/config.php) ⚠️ 已变更

#### 说明

**v5.6+ 版本更新**：`api/config.php` 已不再作为主要的配置文件。它现在只是作为 API 的入口文件，负责：

1. 引入统一的 `config/config.php` 配置文件
2. 引入辅助函数 `helper.php`
3. 引入数据安全处理 `secure_data.php`
4. 验证配置完整性

#### 向后兼容

为了保持向后兼容，`api/config.php` 仍然可以正常引入，它会自动加载 `config/config.php` 中的所有配置。

**旧代码无需修改**：
```php
// 旧代码仍然可以正常工作
require_once 'config.php';  // 这会加载 api/config.php，它会自动引入 config/config.php
```

### 数据库查询配置

#### 功能说明

数据库查询组件允许管理员通过网页界面直接查看Minecraft服务器的MySQL数据库，包括表结构、表数据等信息。

#### 配置文件

- **统一配置文件**：`config/config.php`（数据库配置部分）
- **后端API**：`api/db_test.php`
- **前端页面**：`pages/db_test.html`

#### 配置项

数据库配置现在统一在 `config/config.php` 中管理：

```php
// ==================== 数据库配置 ====================
define('DB_HOST', 'xxx.xxx.xxx.xxx');
define('DB_PORT', 3306);
define('DB_NAME', 'database_name');
define('DB_USER', 'username');
define('DB_PASS', 'password');
```

**配置说明**：

| 配置项 | 说明 | 示例值 |
|--------|------|---------|
| DB_HOST | MySQL服务器地址 | xxx.xxx.xxx.xxx |
| DB_PORT | MySQL端口 | 3306 |
| DB_NAME | 数据库名称 | database_name |
| DB_USER | 数据库用户名 | username |
| DB_PASS | 数据库密码 | password |

#### 功能特性

1. **查看数据库信息**：显示数据库名称和所有表
2. **查看表结构**：显示表的字段信息（字段名、类型、是否为空等）
3. **查看表数据**：显示表中的数据，支持分页（每页10条记录）
4. **分页功能**：支持翻页浏览大量数据

#### 访问方式

- **前端页面**：`/pages/db_test.html`（使用统一配置自动适配环境）
- **后端API**：`/api/db_test.php`（使用统一配置自动适配环境）


### 弹幕系统配置

#### 功能说明

弹幕系统位于首页Banner区域，实现了从右向左滚动的弹幕效果，支持随机颜色、随机速度和鼠标悬停暂停功能。现在通过代码配置控制，不再提供页面开关按钮。

#### 配置文件

- **文件路径**：`js/main.js` 中的 `initDanmaku()` 函数

#### 配置选项

现在所有配置都集中在一个 `config` 对象中，修改更加方便：

```javascript
// 弹幕配置
const config = {
    // 开关控制：true = 开启，false = 关闭
    enabled: true,
    // 弹幕文本列表
    messages: [
        '欢迎来到万驹同源服务器！',
        '服务器地址：mc.eqmemory.cn',
        '添加你的自定义弹幕内容...'
    ],
    // 弹幕颜色列表
    colors: ['#FF6B6B', '#4ECDC4', '#45B7D1', '#96CEB4', '#FFEAA7', '#DDA0DD', '#98D8C8', '#F7DC6F'],
    // 弹幕生成间隔（毫秒）
    interval: 1500,
    // 初始弹幕数量
    initialCount: 5,
    // 启动延迟（毫秒）
    startDelay: 5500
};
```

#### 配置说明

1. **开启/关闭弹幕**

   ```javascript
   enabled: true, // true = 开启，false = 关闭
   ```

2. **修改弹幕内容**

   在 `messages` 数组中添加或修改弹幕文本。

3. **修改弹幕颜色**

   在 `colors` 数组中添加或修改颜色值。

4. **调整弹幕生成频率**

   ```javascript
   interval: 1500, // 改为你想要的毫秒数
   ```

5. **调整初始弹幕数量**

   ```javascript
   initialCount: 5, // 改为你想要的初始数量
   ```

6. **调整弹幕启动延迟**

   ```javascript
   startDelay: 5500, // 改为你想要的延迟毫秒数
   ```

7. **调整弹幕滚动速度**

   在 `createDanmaku()` 函数中修改：

   ```javascript
   const duration = 8 + Math.random() * 8; // 最小8秒，最大16秒
   ```

8. **调整弹幕字体大小**

   在 `createDanmaku()` 函数中修改：

   ```javascript
   const fontSize = 14 + Math.random() * 4; // 最小14px，最大18px
   ```

### 性能监控系统配置

#### 功能说明

性能监控系统位于状态页面，用于记录和展示服务器的性能数据，包括：

- **玩家人数**：实时在线玩家数量
- **CPU使用率**：服务器CPU使用百分比
- **内存使用率**：服务器内存使用百分比
- **时间轴图表**：展示最近一段时间的数据变化趋势

#### 数据存储机制

**数据文件**：`data/performance_data.json`

**数据结构**：

```json
[
    {
        "timestamp": "2026-02-02 04:21:50",
        "time_label": "04:21",
        "players": 5,
        "cpu": 50.9,
        "memory": 32.5
    }
]
```

**先进先出机制**：系统采用 FIFO（先进先出）数据管理机制：

- 当数据点数量达到配置上限时，自动删除最早的数据点
- 始终保留最新的性能数据
- 确保数据文件大小合理，不会无限增长

#### 修改保存次数

**默认配置**：最多保存50个数据点

**修改方法**：

1. **打开配置文件**：`api/performance.php`

2. **找到以下代码**：

   ```php
   // 只保留最近的数据（最多50个点）
   if (count($existingData) > 50) {
       $existingData = array_slice($existingData, -50);
   }
   ```

3. **修改数字**：将 `50` 改为你想要的最大数据点数量

**示例**：

```php
// 只保留最近的数据（最多30个点）
if (count($existingData) > 30) {
    $existingData = array_slice($existingData, -30);
}
```

### 通知系统配置

#### 功能说明

通知系统用于向用户发送信息，但仅限管理员操作

#### 具体细节

管理员用户可在管理员面板——发送通知页面输入通知内容，系统会将通知发送给所有用户。

通知数据存储在 `data/notifications.json` 文件中。

暂不支持markdown语法

可以使用占位符：

- `{username}`：替换为用户实际用户名
- `{server_name}`：替换为服务器名称
- `{server_ip}`：替换为服务器IP地址
- `{current_date}`：替换为当前日期（格式：Y-m-d）
- `{current_time}`：替换为当前时间（格式：H:i:s）

#### 占位符修改

找到 `api/notification.php` 文件，找到以下内容：

```php
$content = $notification['content'];
$content = str_replace('{username}', $username, $content);
$content = str_replace('{server_name}', '万驹同源', $content);
$content = str_replace('{server_ip}', 'mc.eqmemory.cn', $content);
$content = str_replace('{current_date}', date('Y-m-d'), $content);
$content = str_replace('{current_time}', date('H:i:s'), $content);
```

其中，`{server_name}`（万驹同源） 和 `{server_ip}`（mc.eqmemory.cn） 可以根据实际情况修改。

### 统一配置文件 (config.js)

#### 功能说明

`js/config.js` 是项目的统一配置文件，用于管理全局配置，自动区分本地开发环境和生产环境，无需手动修改配置。

#### 配置文件位置

```
PC_Web/
└── js/
    └── config.js  # 统一配置文件
```

#### 配置项说明

##### 1. 环境检测

```javascript
const ENV = {
    // 检测是否为本地开发环境
    isLocalhost: window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1',

    // 检测是否为生产环境
    isProduction: window.location.hostname !== 'localhost' && window.location.hostname !== '127.0.0.1'
};
```

##### 2. API 配置

```javascript
const API_CONFIG = {
    // API 基础地址
    // 本地开发环境使用 localhost:8000，生产环境使用指定域名
    baseUrl: ENV.isLocalhost ? 'http://localhost:8000/api' : 'https://您的域名/api',

    // API 完整地址（用于某些需要完整 URL 的场景）
    fullUrl: ENV.isLocalhost ? 'http://localhost:8000' : 'https://您的域名'
};
```

##### 3. 页面路径配置

```javascript
const PATH_CONFIG = {
    // 数据库查询页面
    dbTest: ENV.isLocalhost ? 'http://localhost:8000/pages/db_test.html' : 'https://您的域名/pages/db_test.html',

    // 公告管理页面
    announcementManager: ENV.isLocalhost ? 'http://localhost:8000/tools/announcement-manager.html' : 'https://您的域名/tools/announcement-manager.html'
};
```

##### 4. 应用配置

```javascript
const APP_CONFIG = {
    // 应用名称
    appName: '万驹同源',

    // API 可用性检测超时时间（毫秒）
    apiTimeout: 3000,

    // 是否启用调试模式
    debugMode: ENV.isLocalhost
};
```

#### 如何修改域名配置

1. **打开配置文件**：使用文本编辑器打开 `js/config.js` 文件

2. **修改 API 配置**：

   ```javascript
   // API 配置
   const API_CONFIG = {
       // API 基础地址
       baseUrl: ENV.isLocalhost ? 'http://localhost:8000/api' : 'https://您的新域名/api',

       // API 完整地址
       fullUrl: ENV.isLocalhost ? 'http://localhost:8000' : 'https://您的新域名'
   };
   ```

3. **修改页面路径配置**：

   ```javascript
   // 页面路径配置
   const PATH_CONFIG = {
       // 数据库查询页面
       dbTest: ENV.isLocalhost ? 'http://localhost:8000/pages/db_test.html' : 'https://您的新域名/pages/db_test.html',

       // 公告管理页面
       announcementManager: ENV.isLocalhost ? 'http://localhost:8000/tools/announcement-manager.html' : 'https://您的新域名/tools/announcement-manager.html'
   };
   ```

4. **保存文件**：保存修改后的配置文件

#### 环境自动适配

- **本地开发环境**：当访问地址为 `localhost` 或 `127.0.0.1` 时，自动使用 `http://localhost:8000`
- **生产环境**：当访问地址为其他域名时，自动使用配置的域名

#### 如何在其他文件中使用配置

##### 在 HTML 文件中使用

1. 首先引入配置文件：

   ```html
   <script src="../js/config.js"></script>
   ```

2. 然后在 JavaScript 代码中使用：

   ```javascript
   // 使用 API 基础地址
   const API_BASE_URL = API_CONFIG.baseUrl;

   // 使用页面路径
   window.open(PATH_CONFIG.dbTest, '_blank');

   // 使用环境配置
   if (ENV.isLocalhost) {
       // 本地环境特定逻辑
   }
   ```

##### 在 JavaScript 文件中使用

1. 确保配置文件在其他 JS 文件之前加载
2. 直接使用全局配置对象：

   ```javascript
   // 使用 API 配置
   const response = await fetch(API_CONFIG.baseUrl + '/mcstatus.php');

   // 使用应用配置
   if (APP_CONFIG.debugMode) {
       console.log('调试信息');
   }
   ```

#### 配置示例

**本地开发环境配置**（自动生效）：

- API 地址：`http://localhost:8000/api`
- 完整 URL：`http://localhost:8000`

**生产环境配置**（需要手动设置）：

- API 地址：`https://mcpc.goldenapplepie.xyz/api`
- 完整 URL：`https://mcpc.goldenapplepie.xyz`

#### 配置验证

配置文件会在页面加载时在控制台输出当前环境信息，您可以通过浏览器开发者工具查看：

```
=== 环境配置 ===
当前环境: 本地开发环境
API 基础地址: http://localhost:8000/api
完整 URL: http://localhost:8000
================
```

### 论坛分类标签配置

#### 功能说明

论坛系统支持帖子分类功能，开发者可以添加新的分类标签来组织帖子内容。分类标签采用统一样式，无需为每个分类单独配置CSS。

#### 配置步骤

##### 步骤1：在forum.html中添加分类标签

在 `.tabs` 容器中添加新的分类按钮：

```html
<div class="tabs fade-in">
    <button class="tab active" data-tab="all">全部</button>
    <button class="tab" data-tab="general">综合讨论</button>
    <button class="tab" data-tab="guide">攻略分享</button>
    <button class="tab" data-tab="report">举报反馈</button>
    <!-- 添加新分类 -->
    <button class="tab" data-tab="new-category">新分类</button>
</div>
```

##### 步骤2：在forum.html中更新JavaScript分类处理

在论坛页面的JavaScript中更新分类处理逻辑：

```javascript
// 分类名称映射
function getCategoryName(category) {
    const categoryNames = {
        'all': '全部',
        'general': '综合讨论',
        'guide': '攻略分享',
        'report': '举报反馈',
        'new-category': '新分类名称'
    };
    return categoryNames[category] || category;
}

// 分类颜色映射
function getCategoryColor(category) {
    const categoryColors = {
        'general': '#3498db',
        'guide': '#2ecc71',
        'report': '#e74c3c',
        'new-category': '#新分类颜色'
    };
    return categoryColors[category] || '#95a5a6';
}
```

##### 步骤3：在posts.php中更新帖子数据

在帖子数据中添加新分类的帖子示例：

```php
[
    {
        'id' => 'post-id',
        'title' => '帖子标题',
        'author' => '作者名',
        'created_at' => '2026-02-22 10:00:00',
        'views' => 0,
        'forum' => 'new-category',
        'content_file' => 'post-content.md'
    }
]
```

#### 注意事项

- 分类标识符（data-tab属性）必须唯一
- 建议使用小写字母和连字符命名
- 分类颜色建议使用十六进制颜色代码
- 确保JavaScript中的分类映射包含新分类
- 帖子数据中的forum字段值必须与分类标识符一致
- 所有分类标签使用统一样式，无需单独配置CSS

---

## 贡献指南

我们欢迎所有形式的贡献！在提交代码之前，请务必阅读以下指南。

### 你可以做的贡献

- 🐛 **修复问题**：发现任何bug，欢迎提交PR
- 🚀 **新增功能**：有新想法或需求，可以提出Issue讨论后实现
- 📝 **文档改进**：优化README或其他文档内容
- ✏️ **代码风格调整**：统一代码格式和命名规范
- 🌐 **国际化支持**：添加多语言翻译文件
- 🔧 **性能优化**：提升现有功能的效率与响应速度

### 🔐 配置文件安全规范（重要）

**⚠️ 请务必遵守以下规则，防止敏感信息泄露：**

#### 禁止提交的文件

以下文件包含敏感信息，**绝对禁止提交到仓库**：

| 文件 | 说明 |
|------|------|
| `config/config.php` | 包含数据库密码、API密钥等敏感配置 |
| `logs/` | 日志文件 |

这些文件已在 `.gitignore` 中配置，Git 会自动忽略它们。

#### 配置文件处理流程

1. **首次克隆项目后**：
   ```bash
   # 复制示例配置文件
   cp config/_config.php config/config.php
   
   # 编辑配置文件，填入你的本地配置
   # 使用你喜欢的编辑器打开 config/config.php
   ```

2. **修改配置时**：
   - ✅ 如果是新增配置项，请同时更新 `config/_config.php`
   - ❌ **永远不要**提交 `config/config.php` 的修改

3. **提交前检查**：
   ```bash
   # 检查将要提交的文件
   git status
   
   # 确保 config/config.php 不在待提交列表中
   # 如果误添加了，使用以下命令移除：
   git reset HEAD config/config.php
   ```

#### 配置示例文件更新

如果需要添加新的配置项：

1. 在 `config/_config.php` 中添加示例配置：
   ```php
   // ==================== 新功能配置 ====================
   define('NEW_FEATURE_ENABLED', false);
   define('NEW_FEATURE_API_KEY', 'your_api_key_here');
   ```

2. 在 `config/config.php` 中添加真实配置（此文件不会被提交）

3. 更新 README 文档说明新配置项的用途

### 📝 代码贡献流程

1. **Fork 本仓库**

2. **创建功能分支**：
   ```bash
   git checkout -b feature/your-feature-name
   ```

3. **进行开发**
   - 遵循项目代码风格
   - 添加必要的注释
   - 确保代码安全性

4. **提交更改**：
   ```bash
   git add .
   git commit -m "feat: 添加新功能描述"
   ```

5. **推送分支**：
   ```bash
   git push origin feature/your-feature-name
   ```

6. **创建 Pull Request**

### 注意规范

- 所有贡献都必须符合项目的代码规范
- 提交的代码必须通过所有测试
- 文档更新必须包含必要的说明
- 新增功能必须有相应的测试用例
- 请勿提交包含敏感信息的文件
- 请勿将此项目用于任何商业用途
- 贡献的代码必须遵循MIT许可证


### 提交问题

方法：

1. 点击仓库顶部的 "Issues" 标签
2. 点击 "New Issue" 按钮
3. 选择合适的问题模板（如果有）
4. 填写问题描述，包括复现步骤和预期行为
5. 包含相关的日志或错误信息（如果有）
6. 点击 "Submit new issue" 按钮

注意事项：

- 请先搜索是否已存在相同问题
- 提供详细的问题描述，包括复现步骤和预期行为
- 包含相关的日志或错误信息（如果有）
- 请勿用不适的语言提交问题（如“这个项目有问题（无详细描述）”、“这个还不如xxx”等）


---


