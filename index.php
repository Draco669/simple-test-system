<?php
// index.php (新的入口檔案)
session_start();

// 帳號密碼設定 (可以考慮移到一個設定檔)
$users = [
    'admin' => 'admin123', // 範例帳號密碼
    'user'  => 'user123',
    'web'  => 'web123'
];

$login_error = '';

// 處理登出請求
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php'); // 登出後跳轉回登入頁面
    exit;
}

// 處理登入表單提交
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['login_user'] = $username;
        // 登入成功，不需要馬上跳轉，因為此頁面本身就是選擇頁
    } else {
        $login_error = '帳號或密碼錯誤！';
    }
}

// 如果使用者尚未登入，顯示登入表單
if (!isset($_SESSION['login_user'])):
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>證照練習系統</title>
    <link rel="stylesheet" href="styles.css"> <style>
        body { display: flex; justify-content: center; align-items: center; min-height: 100vh; background-color: #f0f2f5; margin: 0; }
        .login-container { background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); text-align: center; }
        .login-container h2 { margin-bottom: 20px; }
        .login-container label { display: block; margin-bottom: 8px; text-align: left; }
        .login-container input[type="text"], .login-container input[type="password"] { width: calc(100% - 22px); padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 4px; }
        .login-container button { background-color: #007bff; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; width: 100%; }
        .login-container button:hover { background-color: #0056b3; }
        .error-message { color: red; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>證照練習系統登入</h2>
        <form method="POST" action="index.php">
            <div>
                <label for="username">帳號：</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">密碼：</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">登入</button>
            <?php if (!empty($login_error)): ?>
                <p class="error-message"><?php echo htmlspecialchars($login_error); ?></p>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>
<?php
    exit; // 顯示完登入表單後結束，不執行後續的選擇頁面 HTML
endif;

// ---- 如果已登入，顯示選擇頁面 ----
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>證照練習系統 - 選擇測驗</title>
    <link rel="stylesheet" href="styles.css"> <style>
        /* 您可以為選擇頁面添加特定樣式 */
.selection-container {
    text-align: center;
    margin-top: 50px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px; /* 確認這裡設定了 gap */
    padding: 0 10px;
}
        .selection-container h2 { margin-bottom: 30px; }
        .selection-container .quiz-option {
        padding: 20px 40px;
        border: 1px solid #007bff;
    background-color: #e7f3ff;
    color: #007bff;
    text-decoration: none;
    border-radius: 5px;
    font-size: 1.2em;
    transition: background-color 0.3s, color 0.3s;
    /* flex: 1 1 auto; /* 可以先移除或註解掉 */
    /* min-width: 200px; /* 可以先移除或註解掉 */
    /* max-width: 300px; /* 可以先移除或註解掉 */
    text-align: center;
    flex-basis: calc(50% - 20px); /* 嘗試讓每個按鈕佔據約一半的寬度，並考慮到 gap (假設 gap 是 20px) */
    /* 或者使用一個固定的像素值，例如：flex-basis: 250px; */
}
        .selection-container .quiz-option:hover {
            background-color: #007bff;
            color: white;
        }
        .logout-link { position: absolute; top: 20px; right: 20px; text-decoration: none;}
    </style>
</head>
<body>
    <div class="container">
        <a href="index.php?logout=1" class="logout-link">登出 (<?php echo htmlspecialchars($_SESSION['login_user']); ?>)</a>
        <header>
            <h1>證照練習系統</h1>
        </header>
        <main>
            <div class="selection-container">
                <h2>請選擇你要練習的證照項目</h2>
                <a href="quiz.php?type=web" class="quiz-option">網站管理-賴正男</a>
                <a href="quiz.php?type=project" class="quiz-option">專案管理-劉勇志</a>
                <a href="quiz.php?type=linux" class="quiz-option">linux系統-賴正男</a>
                <a href="quiz.php?type=databasee" class="quiz-option">暫無</a>
                </div>
        </main>
        <footer>
            <p><b>Powered by hanyg.z</b></p>
            <p><b>nlnlouo</b></p>
        </footer>
    </div>
</body>
</html>