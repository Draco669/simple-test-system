<?php
// api/get_questions.php

header('Content-Type: application/json; charset=utf-8');
// 注意：正式部署時，請將 '*' 替換為您的前端網站域名，例如：
// header('Access-Control-Allow-Origin: http://yourdomain.com');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(200);
    exit();
}

$quiz_type = $_GET['type'] ?? '';

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
    echo json_encode(['error' => '未指定有效的測驗類型 (type)。', 'data' => []]);
    exit;
}

$publicQuestions = [];
$questions = []; // 初始化

if (file_exists($questionsFile)) {
    require $questionsFile; // $questions 變數會在這個檔案中被定義
} else {
    http_response_code(500);
    echo json_encode(['error' => "題庫檔案 '{$questionsFile}' 不存在。", 'data' => []]);
    exit;
}

if (isset($questions) && is_array($questions)) {
    $publicQuestions = array_map(function($q) {
        // 確保所有必要的鍵都存在，避免前端 JS 出錯
        return [
            'id' => $q['id'] ?? uniqid('q_'), // 如果沒有 ID，產生一個唯一的
            'question' => $q['question'] ?? '題目文字缺失',
            'media' => $q['media'] ?? null,
            'options' => $q['options'] ?? [],
            'type' => $q['type'] ?? 'single'
            // 不包含 'answer'
        ];
    }, $questions);
} else {
    http_response_code(500);
    echo json_encode(['error' => "題庫資料未正確載入或格式錯誤。", 'data' => []]);
    exit;
}

echo json_encode(['data' => $publicQuestions]);
exit;
?>