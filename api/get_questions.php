<?php
// api/get_questions.php

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(200);
    exit();
}

$quiz_type = $_GET['type'] ?? ''; // 從 URL 獲取選擇的題庫類型，例如 'database' 或 'project'
$questionsFile = '';

if ($quiz_type === 'web') {
    $questionsFile = '../questions_web.php'; // 指向資料庫題庫
} elseif ($quiz_type === 'project') {
    $questionsFile = '../questions_project.php'; // 指向專案管理題庫
} 
  elseif ($quiz_type === 'linux') {
    $questionsFile = '../questions_linux.php'; // 指向專案管理題庫
}
  elseif ($quiz_type === 'database') {
    $questionsFile = '../questions_database.php'; // 指向專案管理題庫
}
else {
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
        return [
            'id' => $q['id'] ?? null,
            'question' => $q['question'] ?? '',
            'media' => $q['media'] ?? null,
            'options' => $q['options'] ?? [],
            'type' => $q['type'] ?? 'single'
            // 不包含 'answer'
        ];
    }, $questions);
} else {
    // 如果 require 後 $questions 還是不存在或不是陣列
    http_response_code(500);
    echo json_encode(['error' => "題庫資料未正確載入或格式錯誤。", 'data' => []]);
    exit;
}

echo json_encode(['data' => $publicQuestions]); // 建議將資料包在 'data' 鍵中
exit;
?>