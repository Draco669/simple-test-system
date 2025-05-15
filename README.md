# PHP 證照練習系統 - 使用說明

這是一個使用 PHP 作為後端、搭配 HTML/CSS/JavaScript 前端的證照測驗練習系統。系統支援使用者登入、選擇不同類型的證照題庫（例如：網站管理、專案管理、Linux系統）進行模擬測驗，並在測驗結束後提供結果和答題詳情複習。

## 系統特色

* 使用者登入驗證
* 支援多種測驗題庫類型選擇
* 從後端 API 動態載入題目 (不含答案，保護題庫)
* **後端 API 進行答案驗證 (支持批量驗證，一次性處理所有答案，提升效率)**
* 單選題與多選題支援
* 測驗計時功能
* 進度顯示與跳題功能
* 測驗結果顯示 (得分、用時、總結)
* 錯誤題目詳情複習 (顯示使用者答案與正確答案)
    * **複習時高亮使用者錯誤選項及正確答案選項**
* 可重新開始測驗
* **增強的使用者介面與體驗：**
    * **支援點擊整個選項區域進行選擇**
    * Toast 式非阻塞性操作結果提示
    * 按鈕操作時的載入狀態回饋
    * **畫面右上角固定的導航按鈕 (登出/返回選擇)**

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
    └── check_answer.php   # **驗證所有已答題目答案的 API**


## 環境需求

* 網頁伺服器 (例如 Apache, Nginx)
* PHP (建議版本 7.4 或更高)
* 現代網頁瀏覽器 (支援 JavaScript ES6+ 及 Fetch API)

## 安裝與設定步驟

### 1. 準備題庫檔案

* **`questions_xxx.php`**: 建立此檔案，並在其中定義一個名為 `$questions` 的 PHP 陣列，包含所有你想要輸入的題目。

    每個題目的陣列元素應包含以下鍵值：
    * `id` (string/int): 題目的唯一ID。
    * `question` (string): 題目文字 (可包含 HTML)。
    * `options` (array): 選項陣列，每個選項是一個包含 `label` (string, 選項描述，可包含 HTML) 和 `value` (string, 選項值) 的關聯陣列。
    * `answer` (array): 正確答案選項值的陣列。
    * `type` (string): 題型，`'single'` 或 `'multiple'`。
    * `media` (array/string, 可選): 如果題目包含圖片或表格等媒體。
        * 若為陣列: `['type' => 'table', 'data' => [ ['Row1Cell1', 'Row1Cell2'], ... ] ]` 或 `['type' => 'image', 'data' => 'path/to/image.png', 'alt' => '圖片描述']`
        * 若為字串: 可以是直接的 HTML `<img>` 標籤。
    * `explanation` (string, 可選): 題目詳解，在複習錯誤題目時顯示。
            ```php
            // 範例：questions_web.php
            <?php
            $questions = [
                [
                    "id" => "WEB_001",
                    "question" => "瀏覽器主要解析的檔案格式為下列哪一項？",
                    "media" => null,
                    "options" => [
                        ["label" => "HTML 檔案", "value" => "A"],
                        ["label" => "EXE 檔案", "value" => "B"],
                        // ...
                    ],
                    "answer" => ["A"],
                    "type" => "single",
                    "explanation" => "HTML (HyperText Markup Language) 是網頁的標準標記語言。"
                ],
                // ...更多題目...
            ];
            ?>
            ```

### 2. 上傳檔案至伺服器

* 將整個專案資料夾上傳到您的虛擬主機或伺服器的網站根目錄或其下的某個子目錄。
* 確保檔案和資料夾的相對結構與本地開發時保持一致。

### 3. 設定使用者帳號 (可選)

* 打開 `index.php` 檔案。
* 找到 `$users` 陣列，您可以修改或新增預設的登入帳號和密碼。

### 4. 檢查 API 路徑

* `api/get_questions.php` 和 `api/check_answer.php` 中的 `require __DIR__ . '/../questions_xxx.php';` 依賴於題庫檔案在 `api` 資料夾的上一層。

### 5. 測試系統

* 在瀏覽器中開啟 `index.php` 的網址。
* 使用設定的帳號密碼登入。
* 選擇測驗類型進入 `quiz.php`。
* 點擊「開始測驗」。
* **測試所有功能，包括點擊整個選項區域進行選擇、跳題、提交、查看結果、複習詳情（注意錯誤題目和正確答案的高亮）、重新開始、以及固定在畫面右上角的登出/返回按鈕。**

## 如何使用系統

1.  **訪問入口頁面。**
2.  **登入。**
3.  **選擇測驗類型。**
4.  **開始測驗。**
5.  **答題：**
    * **可以點擊選項的任意位置（包括文字或選項框）來選取答案。**
    * 使用「上一題」、「下一題」或跳題功能。
    * 留意右上角的進度和計時。
6.  **提交答案。**
7.  **查看結果。**
8.  **查看答題詳情：**
    * **點擊「查看答題詳情」按鈕，可以複習所有題目。**
    * **答錯的題目會被標記，並會高亮顯示您選擇的錯誤選項和正確的答案選項。**
    * 若題庫提供詳解，答錯時會一併顯示。
9.  **重新開始。**
10. **登出：** **點擊固定在畫面右上角的「登出」按鈕。**

## 注意事項

* **為提高安全性，在正式部署時，`api/get_questions.php` 和 `api/check_answer.php` 中的 `header('Access-Control-Allow-Origin: *');` 應修改為只允許您的前端網站的域名訪問。**
* 題庫檔案 (`questions_xxx.php`) 應放置在網頁伺服器不易被直接通過 URL 訪問到的位置。