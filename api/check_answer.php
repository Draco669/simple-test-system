<?php
// api/check_answer.php

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(200);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'POST method required.', 'correct' => false, 'actualAnswer' => []]);
    exit;
}

$inputData = json_decode(file_get_contents('php://input'), true);
$questionId = $inputData['id'] ?? null;
$userAnswer = $inputData['answer'] ?? [];
$quiz_type = $inputData['quiz_type'] ?? ''; // 前端提交答案時也需要帶上 quiz_type

if ($questionId === null || !is_array($userAnswer) || empty($quiz_type)) {
     http_response_code(400);
     echo json_encode(['error' => '無效的輸入資料：缺少題目ID、答案非陣列或未指定測驗類型。', 'correct' => false, 'actualAnswer' => []]);
     exit;
}

$questionsFile = '';
if ($quiz_type === 'web') {
    $questionsFile = '../questions_web.php';
} elseif ($quiz_type === 'project') {
    $questionsFile = '../questions_project.php';
}
elseif ($quiz_type === 'linux') {
    $questionsFile = '../questions_linux.php';
} 
elseif ($quiz_type === 'database') {
    $questionsFile = '../questions_database.php';
}
else {
    http_response_code(400);
    echo json_encode(['error' => '無效的測驗類型。', 'correct' => false, 'actualAnswer' => []]);
    exit;
}

$questions = [];
if (file_exists($questionsFile)) {
    require $questionsFile;
} else {
    http_response_code(500);
    echo json_encode(['error' => "題庫檔案 '{$questionsFile}' 不存在。", 'correct' => false, 'actualAnswer' => []]);
    exit;
}

$foundQuestion = null;
if (isset($questions) && is_array($questions)) {
    foreach ($questions as $q) {
        if (isset($q['id']) && $q['id'] == $questionId) {
            $foundQuestion = $q;
            break;
        }
    }
}

$isCorrect = false;
$actualCorrectAnswer = [];

if ($foundQuestion) {
    $actualCorrectAnswer = $foundQuestion['answer'] ?? [];
    if (!is_array($actualCorrectAnswer)) $actualCorrectAnswer = [$actualCorrectAnswer];

    $userAnswerArray = $userAnswer;
    if (!is_array($userAnswerArray)) $userAnswerArray = [$userAnswerArray];

    sort($userAnswerArray);
    sort($actualCorrectAnswer);
    $isCorrect = ($userAnswerArray === $actualCorrectAnswer);
} else {
    http_response_code(404);
    echo json_encode([
        'error' => "在 '{$quiz_type}' 題庫中找不到 ID 為 '{$questionId}' 的題目。",
        'correct' => false,
        'actualAnswer' => []
    ]);
    exit;
}

echo json_encode([
    'correct' => $isCorrect,
    'actualAnswer' => $actualCorrectAnswer
]);
exit;
?>