<?php
// quiz.php (原 index.php，現在是測驗進行頁面)
session_start();

// ... (登入檢查和 $quiz_type 獲取邏輯保持不變) ...
if (!isset($_SESSION['login_user'])) {
    header('Location: index.php');
    exit;
}
$quiz_type = $_GET['type'] ?? null;
// 新增更多有效的測驗類型判斷
if ($quiz_type !== 'web' && $quiz_type !== 'project' && $quiz_type !== 'database' && $quiz_type !== 'linux') {
    echo "無效的測驗類型。請返回選擇頁面。";
    exit;
}

$quiz_type_name = '';
if ($quiz_type === 'web') {
    $quiz_type_name = '網站管理實務';
} elseif ($quiz_type === 'project') {
    $quiz_type_name = '專案管理';
} elseif ($quiz_type === 'database') {
    $quiz_type_name = '資料庫管理';
} elseif ($quiz_type === 'linux') {
    $quiz_type_name = 'linux系統';
}

$page_title = $quiz_type_name . ' - 測驗準備';

?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* 新增提示區塊的樣式 (可選) */
        #initial-prompt-container {
            text-align: center;
            padding: 40px 20px;
            border: 1px solid #eee;
            background-color: #f9f9f9;
            margin: 20px;
            border-radius: 8px;
        }
        #initial-prompt-container p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>證照練習系統 - <?php echo htmlspecialchars($quiz_type_name); ?></h1>
            <a href="index.php?logout=1" style="float:right; margin-left: 10px;">登出 (<?php echo htmlspecialchars($_SESSION['login_user']); ?>)</a>
            <a href="index.php" style="float:right;">返回選擇</a>
            <div class="controls">
                <button id="startBtn">開始 <?php echo htmlspecialchars($quiz_type_name); ?> 測驗</button>
                <span id="progress">0 / 0</span>
                <span id="timer">00:00</span>
            </div>
        </header>
        <main>
            <div id="initial-prompt-container">
                <h2>準備開始【<?php echo htmlspecialchars($quiz_type_name); ?>】練習！</h2>
                <p>所有題目均為模擬試題，僅供練習參考。</p>
                <p>準備好後，請點擊上方的「開始 <?php echo htmlspecialchars($quiz_type_name); ?> 測驗」按鈕開始作答。</p>
            </div>

            <div id="quiz-container" class="hidden"> <div id="question-number">題目 1 / X</div>
                <div class="question-jump-bar">
                    題號: <input type="number" id="jumpInput" min="1" style="width:50px;">
                    <button id="jumpBtn">跳</button>
                </div>
                <div id="question-type" class="question-tag"></div>
                <div id="question-text"></div>
                <div id="media-container"></div>
                <div id="options-container"></div>
                <div class="quiz-buttons">
                    <button id="prevBtn" disabled>上一題</button>
                    <button id="nextBtn">下一題</button>
                    <button id="submitBtn" class="hidden">提交答案</button>
                </div>
            </div>

            <div id="results-container" class="hidden">
                <h2>測試结果</h2>
                <div id="score-display"></div>
                <div id="time-taken"></div>
                <div id="results-summary"></div>
                <button id="reviewBtn">查看答題詳情</button>
                <button id="restartBtn">重新開始此類型測驗</button>
            </div>

            <div id="review-container" class="hidden">
                <h2>答題詳情</h2>
                <div id="review-list"></div>
                <button id="backToResultsBtn">返回结果</button>
            </div>
        </main>
        <footer>
            <p><b>Powered By hanyg.z</b></p>
            <p><b>nlnlouo</p></b>
        </footer>
    </div>

    <script>
    const currentQuizType = '<?php echo htmlspecialchars($quiz_type); ?>';

    function fetchQuestions(callback) {
        fetch(`api/get_questions.php?type=${currentQuizType}`)
            .then(res => {
                if (!res.ok) return res.text().then(text => { throw new Error(`獲取題目失敗 (${res.status}): ${text.substring(0,100)}`) });
                return res.json();
            })
            .then(data => {
                // 確保 data.data 存在且是陣列，否則使用 data 本身 (如果後端直接回傳陣列) 或空陣列
                const questionsArray = (data && Array.isArray(data.data)) ? data.data : (Array.isArray(data) ? data : []);
                if (data && data.error && !questionsArray.length) { // 如果有錯誤且沒有題目數據
                     callback({error: data.error, data: []});
                } else {
                    callback({data: questionsArray, error: null}); // 確保回傳的 data 是陣列
                }
            })
            .catch(error => {
                console.error('Fetch questions error:', error);
                callback({ error: error.message, data: [] });
            });
    }

    function checkAnswer(questionId, userAnswer, callback) {
        fetch(`api/check_answer.php`, {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({id: questionId, answer: userAnswer, quiz_type: currentQuizType })
        })
        .then(res => {
            if (!res.ok) return res.text().then(text => { throw new Error(`驗證答案失敗 (${res.status}): ${text.substring(0,100)}`) });
            return res.json();
        })
        .then(data => {
             if (data && data.error) {
                callback({ correct: false, error: data.error, actualAnswer: data.actualAnswer || [] });
             } else {
                callback(data);
             }
        })
        .catch(error => {
            console.error('Check answer error:', error);
            callback({ correct: false, error: error.message, actualAnswer: [] });
        });
    }
    </script>
    <script src="function.js"></script>
</body>
</html>
