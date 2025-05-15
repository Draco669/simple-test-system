<?php
// api/check_answer.php

header('Content-Type: application/json; charset=utf-8');
// 注意：正式部署時，請將 '*' 替換為您的前端網站域名，例如：
// header('Access-Control-Allow-Origin: http://yourdomain.com');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(200);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'POST method required.', 'results' => []]);
    exit;
}

$inputData = json_decode(file_get_contents('php://input'), true);

$quiz_type = $inputData['quiz_type'] ?? '';
$submitted_answers = $inputData['answers'] ?? []; // 預期是一個包含 {id: "...", user_answer: []} 的陣列

if (empty($quiz_type) || !is_array($submitted_answers)) {
     http_response_code(400);
     echo json_encode(['error' => '無效的輸入資料：缺少測驗類型或答案格式不正確。', 'results' => []]);
     exit;
}

// 使用關聯陣列管理題庫檔案路徑
$quizTypeFiles = [
    'web' => __DIR__ . '/../questions_web.php',
    'project' => __DIR__ . '/../questions_project.php',
    'linux' => __DIR__ . '/../questions_linux.php',
    'database' => __DIR__ . '/../questions_database.php',
];

$questionsFile = '';
if (array_key_exists($quiz_type, $quizTypeFiles)) {
    $questionsFile = $quizTypeFiles[$quiz_type];
} else {
    http_response_code(400);
    echo json_encode(['error' => '無效的測驗類型。', 'results' => []]);
    exit;
}

$questions_from_db = []; // 用來儲存從題庫檔案載入的題目
if (file_exists($questionsFile)) {
    require $questionsFile; // $questions 變數會在這個檔案中被定義
    if (isset($questions) && is_array($questions)) {
        $questions_from_db = $questions;
    }
} else {
    http_response_code(500);
    echo json_encode(['error' => "題庫檔案 '{$questionsFile}' 不存在。", 'results' => []]);
    exit;
}

if (empty($questions_from_db)) {
    http_response_code(500);
    echo json_encode(['error' => "題庫資料未正確載入或格式錯誤。", 'results' => []]);
    exit;
}

// 為了方便查找，將題庫轉換為以題目 ID 為鍵的關聯陣列
$indexed_questions = [];
foreach ($questions_from_db as $q) {
    if (isset($q['id'])) {
        $indexed_questions[$q['id']] = $q;
    }
}

$results = [];

foreach ($submitted_answers as $submitted_answer_item) {
    $questionId = $submitted_answer_item['id'] ?? null;
    $userAnswerArray = $submitted_answer_item['user_answer'] ?? [];
    $isCorrect = false;
    $actualCorrectAnswer = [];

    if ($questionId !== null && isset($indexed_questions[$questionId])) {
        $foundQuestion = $indexed_questions[$questionId];
        $actualCorrectAnswer = $foundQuestion['answer'] ?? [];
        if (!is_array($actualCorrectAnswer)) $actualCorrectAnswer = [$actualCorrectAnswer];
        if (!is_array($userAnswerArray)) $userAnswerArray = [$userAnswerArray];

        sort($userAnswerArray);
        sort($actualCorrectAnswer);
        $isCorrect = ($userAnswerArray === $actualCorrectAnswer);

        $results[] = [
            'id' => $questionId,
            'correct' => $isCorrect,
            'actualAnswer' => $actualCorrectAnswer
        ];
    } else {
        // 如果找不到題目 ID，也記錄一個錯誤結果
        $results[] = [
            'id' => $questionId,
            'correct' => false,
            'actualAnswer' => [],
            'error' => "在 '{$quiz_type}' 題庫中找不到 ID 為 '{$questionId}' 的題目。"
        ];
    }
}

echo json_encode($results); // 直接返回結果陣列
exit;
?>