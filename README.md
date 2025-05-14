# PHP 證照練習系統 - 使用說明

這是一個使用 PHP 作為後端、搭配 HTML/CSS/JavaScript 前端的證照測驗練習系統。系統支援使用者登入、選擇不同類型的證照題庫（例如：資料庫、專案管理）進行模擬測驗，並在測驗結束後提供結果和答題詳情複習。

## 系統特色

* 使用者登入驗證
* 支援多種測驗題庫類型選擇
* 從後端 API 動態載入題目 (不含答案，保護題庫)
* 後端進行答案驗證
* 單選題與多選題支援
* 測驗計時功能
* 進度顯示與跳題功能
* 測驗結果顯示 (得分、用時、總結)
* 錯誤題目詳情複習 (顯示使用者答案與正確答案)
* 可重新開始測驗

## 檔案結構

建議的檔案結構如下：
your_project_root/ (例如：htdocs/test/ 或 public_html/quiz_system/)
├── index.php            # 登入頁面 & 測驗類型選擇頁面
├── quiz.php             # 測驗進行頁面
├── function.js          # 前端主要的 JavaScript 邏輯
├── styles.css           # CSS 樣式表
├── questions_web.php  # 網站管理證照題庫 (含答案)
├── questions_project.php   # 專案管理證照題庫 (含答案)
├── questions_linux.php   # linux證照題庫 (含答案)
│
└── api/                 # 後端 API 腳本資料夾
├── get_questions.php  # 提供題目的 API (不含答案)
└── check_answer.php   # 驗證答案的 API


## 環境需求

* 網頁伺服器 (例如 Apache, Nginx)
* PHP (建議版本 7.4 或更高，需支援 `json_decode`, `json_encode`, `file_get_contents` 等常用函數)
* 現代網頁瀏覽器 (支援 JavaScript ES6+ 及 Fetch API)

## 安裝與設定步驟

### 1. 準備題庫檔案

* **`questions_xxx.php`**: 建立此檔案，並在其中定義一個名為 `$questions` 的 PHP 陣列，包含所有你想要輸入的題目。

    每個題目的陣列元素應包含以下鍵值：
    * `id` (string/int): 題目的唯一ID (例如："1", "2", "DB-003")。
    * `question` (string): 題目文字。
    * `options` (array): 選項陣列，每個選項是一個包含 `label` (string, 選項描述) 和 `value` (string, 選項值，如 "A", "B") 的關聯陣列。
    * `answer` (array): 正確答案選項值的陣列 (例如 `["A"]` 或 `["A", "C"]`)。
    * `type` (string): 題型，`'single'` 代表單選，`'multiple'` 代表多選。
    * `media` (array, 可選): 如果題目包含圖片或表格等媒體。
        * `type` (string): 媒體類型，例如 `'table'` 或 `'image'`。
        * `data` (mixed): 媒體內容。
            * 對於表格，`data` 可以是一個二維陣列，表示表格的行和儲存格。
            * 對於圖片，`data` (或改用 `src`) 可以是圖片的路徑。
            ```php
            // 範例：questions_database.php 或 questions_project.php
            <?php
            $questions = [
                [
                    "id" => "DB_001",
                    "question" => "SQL 中用於查詢資料的關鍵字是？",
                    "media" => null, // 或省略此鍵
                    "options" => [
                        ["label" => "INSERT", "value" => "A"],
                        ["label" => "SELECT", "value" => "B"],
                        ["label" => "UPDATE", "value" => "C"],
                        ["label" => "DELETE", "value" => "D"]
                    ],
                    "answer" => ["B"],
                    "type" => "single",
                    "explanation" => "SELECT 用於從資料庫中選取資料。" // (可選) 題目詳解
                ],
                // ...更多題目...
            ];
            ?>
            ```

### 2. 上傳檔案至伺服器

* 將整個專案資料夾（包含 `index.php`, `quiz.php`, `function.js`, `styles.css`, `questions_你的題庫.php` 以及 `api/` 資料夾和其下的 PHP 檔案）上傳到您的虛擬主機或伺服器的網站根目錄（例如 `public_html`、`www` 或 XAMPP/MAMP 的 `htdocs`）或其下的某個子目錄。
* 確保檔案和資料夾的相對結構與本地開發時保持一致。

### 3. 設定使用者帳號 (可選)

* 打開 `index.php` 檔案。
* 找到 `$users` 陣列，您可以修改或新增預設的登入帳號和密碼：
    ```php
    $users = [
        'admin' => 'admin123', // 管理員帳號
        'user'  => 'user123',  // 一般使用者帳號
        'student' => 'password456' // 新增帳號
    ];
    ```

### 4. 檢查 PHP API 路徑 (`require` 路徑)

* 打開 `api/get_questions.php` 和 `api/check_answer.php`。
* 確認開頭的 `require` 語句指向正確的題庫檔案位置。如果題庫檔案 (`questions_database.php`, `questions_project.php`) 與 `api/` 資料夾在同一個父目錄下（例如專案根目錄），則路徑應為：
    ```php
    require __DIR__ . '/../questions_database.php';
    // 或
    require __DIR__ . '/../questions_project.php';
    ```
    `__DIR__` 可以確保路徑的相對準確性。

### 5. 測試系統

* 在瀏覽器中開啟 `index.php` 的網址 (例如 `http://yourdomain.com/your_project_folder/index.php` 或 `http://localhost/your_project_folder/index.php`)。
* 使用您在 `index.php` 中設定的帳號密碼登入。
* 登入成功後，您應該會看到選擇測驗類型的頁面。
* 點擊一個測驗類型，進入 `quiz.php` 頁面。
* 您應該會看到該測驗的初始提示文字。
* 點擊「開始測驗」按鈕，開始答題。
* 測試答題、上一題、下一題、跳題、提交答案、查看結果、查看答題詳情和重新開始測驗等所有功能。

## 如何使用系統

1.  **訪問入口頁面：** 打開瀏覽器，輸入您部署的 `index.php` 的網址。
2.  **登入：** 輸入預設的帳號密碼（例如 user/user123 或 admin/admin123）進行登入。
3.  **選擇測驗類型：** 登入成功後，點選您想要練習的證照類型（例如「資料庫系統管理實務」或「專案管理」）。
4.  **開始測驗：** 進入測驗準備頁面後，點擊「開始【測驗類型名稱】測驗」按鈕。
5.  **答題：**
    * 閱讀題目和選項。
    * 對於單選題，點擊一個選項。
    * 對於多選題，點擊所有您認為正確的選項。
    * 可以使用「上一題」、「下一題」按鈕切換題目。
    * 可以使用題號輸入框和「跳」按鈕直接跳轉到特定題目。
    * 右上角會顯示您的答題進度和計時。
6.  **提交答案：** 回答完所有題目（或到達最後一題時），「下一題」按鈕會變成「提交答案」。點擊提交。
7.  **查看結果：** 提交後會顯示您的得分、用時和總結。
8.  **查看答題詳情：** 點擊「查看答題詳情」按鈕，可以複習您答錯的題目，系統會顯示您的答案和正確答案以及可能的題目詳解（如果題庫中有提供）。
9.  **重新開始：** 在結果頁面或複習頁面，可以點擊「重新開始此類型測驗」或「返回結果」再選擇重新開始。
10. **登出：** 在選擇頁面或測驗頁面，可以點擊右上角的「登出」連結。

## 注意事項

* 本系統的安全性主要依賴於將題庫答案儲存在後端PHP檔案中，前端僅獲取不含答案的題目。
* 為提高安全性，在正式部署時，`api/get_questions.php` 和 `api/check_answer.php` 中的 `header('Access-Control-Allow-Origin: *');` 應修改為只允許您的前端網站的域名訪問，而不是 `*` (所有來源)。
* 題庫檔案 (`questions_database.php`, `questions_project.php`) 應放置在網頁伺服器不易被直接通過 URL 訪問到的位置，或者通過伺服器配置（如 `.htaccess`）限制對 `.php` 檔案的直接訪問（除了作為腳本執行）。目前透過 `require __DIR__ . '/../...'` 的方式是將其放在 `api` 目錄的上一層，這在一定程度上避免了直接放在 `api` 目錄下。