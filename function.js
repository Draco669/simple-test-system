// function.js (修改後版本 - 與 PHP 後端 API 配合)
document.addEventListener('DOMContentLoaded', function() {
    // 初始化变量
    let quizQuestions = []; // 將由後端獲取並填充
    let currentQuestionIndex = 0;
    let userAnswers = []; // 儲存使用者對每個問題的答案陣列 (例如 [['A'], ['B', 'C'], ...])
    let reviewDetails = []; // 儲存每題的複習詳情，結構: { questionId, questionText, media, options, userAnswer, correctAnswer, isCorrect, type }
    let timerInterval;
    let startTime;
    let totalSeconds = 0;

    // DOM元素 (保持不變)
    const startBtn = document.getElementById('startBtn');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const submitBtn = document.getElementById('submitBtn');
    const welcomeScreen = document.getElementById('welcome-screen');
    const quizContainer = document.getElementById('quiz-container');
    const resultsContainer = document.getElementById('results-container');
    const reviewContainer = document.getElementById('review-container');
    const questionTypeEl = document.getElementById('question-type');
    const questionText = document.getElementById('question-text');
    const optionsContainer = document.getElementById('options-container');
    const questionNumber = document.getElementById('question-number');
    const progressEl = document.getElementById('progress');
    const timerEl = document.getElementById('timer');
    const reviewBtn = document.getElementById('reviewBtn');
    const restartBtn = document.getElementById('restartBtn');
    const backToResultsBtn = document.getElementById('backToResultsBtn');
    const reviewList = document.getElementById('review-list');
    const scoreDisplay = document.getElementById('score-display');
    const timeTaken = document.getElementById('time-taken');
    const resultsSummary = document.getElementById('results-summary');
    const mediaContainer = document.getElementById('media-container');
    const jumpInput = document.getElementById('jumpInput');
    const jumpBtn = document.getElementById('jumpBtn');

    // 事件监听器 (基本保持不變)
    if (startBtn) startBtn.addEventListener('click', startQuiz);
    if (prevBtn) prevBtn.addEventListener('click', goToPreviousQuestion);
    if (nextBtn) nextBtn.addEventListener('click', goToNextQuestion);
    if (submitBtn) submitBtn.addEventListener('click', submitQuiz);
    if (reviewBtn) reviewBtn.addEventListener('click', showReview);
    if (restartBtn) restartBtn.addEventListener('click', restartQuiz);
    if (backToResultsBtn) backToResultsBtn.addEventListener('click', backToResults);

    if (jumpBtn && jumpInput) {
        jumpBtn.addEventListener('click', function() {
            if (quizQuestions.length === 0) {
                alert('題目尚未載入完成。');
                return;
            }
            const val = parseInt(jumpInput.value, 10);
            if (!isNaN(val) && val >= 1 && val <= quizQuestions.length) {
                currentQuestionIndex = val - 1;
                showQuestion(currentQuestionIndex);
            } else {
                alert(`請輸入 1 到 ${quizQuestions.length} 之間的題號。`);
            }
        });
    }

    // 輔助函數：從陣列中隨機抽取指定數量的元素
    function sampleArray(array, count) {
        if (!array || array.length === 0) {
            return [];
        }
        const numToSample = Math.min(count, array.length);
        const shuffled = [...array].sort(() => 0.5 - Math.random());
        return shuffled.slice(0, numToSample);
    }

    // 開始測試 - 修改為非同步載入題目
// 在 function.js 中
// 在 function.js 中
// ... (其他變數和 DOM 元素獲取保持不變) ...
const initialPromptContainer = document.getElementById('initial-prompt-container'); // 新增獲取這個元素

async function startQuiz() {
    if (startBtn) startBtn.style.display = 'none'; // 或 startBtn.disabled = true;
    // if (welcomeScreen) welcomeScreen.classList.add('hidden'); // 如果 quiz.php 中沒有 welcomeScreen，這行可以移除或保留

    // ----- 修改開始 -----
    if (initialPromptContainer) {
        initialPromptContainer.classList.add('hidden'); // 隱藏初始提示
    }
    if (quizContainer) {
        quizContainer.classList.remove('hidden'); // 顯示測驗容器
    }
    // ----- 修改結束 -----

    if (questionText) questionText.textContent = '題目載入中，請稍候...';
    if (optionsContainer) optionsContainer.innerHTML = '';
    if (mediaContainer) mediaContainer.innerHTML = '';
    if (questionNumber) questionNumber.textContent = '';
    if (progressEl) progressEl.textContent = '0 / 0';


    try {
        if (typeof currentQuizType === 'undefined' || !currentQuizType) {
            throw new Error("未定義測驗類型 (currentQuizType)，無法載入題目。");
        }

        const response = await new Promise((resolve, reject) => { // 將 fetchQuestions 的回呼包裝成 Promise
            if (typeof window.fetchQuestions === 'function') {
                window.fetchQuestions(resolve); // resolve 會接收到 {data: [...], error?: "..."}
            } else {
                reject(new Error("全域函數 fetchQuestions 未定義。"));
            }
        });

        if (response.error || !response.data || !Array.isArray(response.data) || response.data.length === 0) {
            alert('無法載入題目資料：' + (response.error || '題庫可能為空或格式錯誤。'));
            // 可以選擇跳回 index.php 或顯示其他錯誤處理
            if (questionText) questionText.textContent = '載入題目失敗，請返回選擇。';
            if (startBtn) startBtn.style.display = ''; // 重新顯示開始按鈕，以便使用者重試或返回
            if (initialPromptContainer) initialPromptContainer.classList.remove('hidden'); // 重新顯示提示
            if (quizContainer) quizContainer.classList.add('hidden'); // 隱藏測驗容器
            return;
        }

        quizQuestions = sampleArray(response.data, 50);

        if (quizQuestions.length === 0) {
             alert('抽取的題目數量為0，請檢查題庫或題庫類型。');
             if (questionText) questionText.textContent = '無可用題目，請返回選擇其他測驗。';
             // 同上，提供返回或重試的選項
             if (startBtn) startBtn.style.display = '';
             if (initialPromptContainer) initialPromptContainer.classList.remove('hidden');
             if (quizContainer) quizContainer.classList.add('hidden');
             return;
        }

        currentQuestionIndex = 0;
        userAnswers = Array(quizQuestions.length).fill(null).map(() => []);
        reviewDetails = [];

        if (progressEl) progressEl.textContent = `0 / ${quizQuestions.length}`;
        if (jumpInput) {
            jumpInput.max = quizQuestions.length;
            jumpInput.value = "1"; // 重置跳題輸入框
        }


        startTime = new Date();
        totalSeconds = 0;
        if (timerInterval) clearInterval(timerInterval);
        startTimer();

        showQuestion(currentQuestionIndex);
        updateProgress();

    } catch (error) {
        console.error("開始測驗時載入題目失敗:", error);
        if (questionText) questionText.innerHTML = '載入題目失敗，請檢查您的網路連線或聯繫管理員。<br>' + error.message;
        // 在出錯時，也確保 UI 狀態合理
        if (startBtn) startBtn.style.display = '';
        if (initialPromptContainer) initialPromptContainer.classList.remove('hidden');
        if (quizContainer) quizContainer.classList.add('hidden');
    }
}

    // renderMedia 函數 (保持您原有的，確保它能正確處理 media 數據)
    // 假設 question.media 的結構是 { type: 'table', data: [ arrayOfRows ] }
    // 或者 question.media 是 null/undefined
    function renderMedia(container, mediaObject) {
        if (!container || !mediaObject || !mediaObject.data) {
            if (container) container.innerHTML = ''; // 清空 (如果沒有 media)
            return;
        }
        container.innerHTML = ''; // 清空舊內容

        if (mediaObject.type === 'table' && Array.isArray(mediaObject.data)) {
            const table = document.createElement('table');
            mediaObject.data.forEach(rowDataArray => {
                if (Array.isArray(rowDataArray)) {
                    const rowElement = table.insertRow();
                    rowDataArray.forEach(cellContent => {
                        const cellElement = rowElement.insertCell();
                        cellElement.innerHTML = cellContent; // 允許HTML內容
                    });
                } else if (typeof rowDataArray === 'string') { // 處理 ["資料表emp如下:"] 這種情況
                    const rowElement = table.insertRow();
                    const cellElement = rowElement.insertCell();
                    cellElement.colSpan = 100; // 讓它佔滿一行
                    cellElement.innerHTML = rowDataArray;
                }
            });
            container.appendChild(table);
        }
        // 您可以根據需要擴展以支援其他 media type (例如 'image')
        else if (mediaObject.type === 'image' && typeof mediaObject.src === 'string') {
            const img = document.createElement('img');
            img.src = mediaObject.src;
            if (mediaObject.alt) img.alt = mediaObject.alt;
            container.appendChild(img);
        }
    }


    // showQuestion 函數
    function showQuestion(index) {
        if (!quizQuestions || index < 0 || index >= quizQuestions.length) {
            console.warn("showQuestion: 索引無效或題目未載入", index, quizQuestions);
            return;
        }

        const question = quizQuestions[index];
        if (!question) {
            console.error("showQuestion: 找不到題目於索引", index);
            return;
        }

        if (questionNumber) questionNumber.textContent = `題目 ${index + 1} / ${quizQuestions.length}`;
        if (questionText) questionText.textContent = question.question;

        if (questionTypeEl) {
            if (question.type === 'single') {
                questionTypeEl.textContent = '單選題';
                questionTypeEl.className = 'question-tag single-choice';
            } else {
                questionTypeEl.textContent = '複選題';
                questionTypeEl.className = 'question-tag multiple-choice';
            }
        }

        // 處理 media
        if (mediaContainer) {
            renderMedia(mediaContainer, question.media);
        }


        if (optionsContainer) optionsContainer.innerHTML = '';
        if (question.options && Array.isArray(question.options)) {
            question.options.forEach((option) => {
                const optionEl = document.createElement('div');
                optionEl.className = 'option';
                const inputType = question.type === 'single' ? 'radio' : 'checkbox';
                const inputName = `question${index}`; // 為單選題的 radio button 分組

                const currentAnswerForQuestion = userAnswers[index] || [];
                const isSelected = currentAnswerForQuestion.includes(option.value);

                const inputEl = document.createElement('input');
                inputEl.type = inputType;
                inputEl.name = inputName;
                inputEl.value = option.value;
                inputEl.id = `option-${index}-${option.value}`; // 確保 ID 唯一
                inputEl.checked = isSelected;

                const labelEl = document.createElement('label');
                labelEl.htmlFor = inputEl.id;
                labelEl.className = 'option-text';
                labelEl.innerHTML = `${option.value}. ${option.label}`;

                optionEl.appendChild(inputEl);
                optionEl.appendChild(labelEl);

                if (isSelected) {
                    optionEl.classList.add('selected');
                }

                optionEl.addEventListener('click', function(event) {
                    // 阻止 label 觸發兩次點擊 (一次 label，一次 input)
                    // if (event.target.tagName === 'LABEL') return;

                    const clickedInput = this.querySelector('input');
                    if (!clickedInput) return;

                    if (question.type === 'single') {
                        // 更新 userAnswers
                        userAnswers[index] = [clickedInput.value];
                        // 更新 UI
                        document.querySelectorAll(`#options-container .option`).forEach(opt => {
                            opt.classList.remove('selected');
                            opt.querySelector('input').checked = false;
                        });
                        this.classList.add('selected');
                        clickedInput.checked = true;
                    } else { // 多選題
                        const value = clickedInput.value;
                        // 先確保 userAnswers[index] 是個陣列
                        if (!Array.isArray(userAnswers[index])) {
                            userAnswers[index] = [];
                        }

                        if (clickedInput.checked) { // 如果點擊後是選中 (或原本就是選中)
                            if (!userAnswers[index].includes(value)) {
                                userAnswers[index].push(value);
                            }
                            this.classList.add('selected');
                        } else { // 如果點擊後是取消選中
                            userAnswers[index] = userAnswers[index].filter(ans => ans !== value);
                            this.classList.remove('selected');
                        }
                         // 同步 input 的 checked 狀態 (雖然瀏覽器通常會自動處理)
                        clickedInput.checked = this.classList.contains('selected');
                    }
                    updateProgress();
                });
                if (optionsContainer) optionsContainer.appendChild(optionEl);
            });
        }

        if (prevBtn) prevBtn.disabled = index === 0;
        if (index === quizQuestions.length - 1) {
            if (nextBtn) nextBtn.classList.add('hidden');
            if (submitBtn) submitBtn.classList.remove('hidden');
        } else {
            if (nextBtn) nextBtn.classList.remove('hidden');
            if (submitBtn) submitBtn.classList.add('hidden');
        }
    }

    // 更新進度顯示
    function updateProgress() {
        if (!progressEl || !quizQuestions || quizQuestions.length === 0) return;
        const answeredCount = userAnswers.filter(answer => answer && answer.length > 0).length;
        progressEl.textContent = `${answeredCount} / ${quizQuestions.length}`;
    }

    // 下一題
    function goToNextQuestion() {
        if (currentQuestionIndex < quizQuestions.length - 1) {
            currentQuestionIndex++;
            showQuestion(currentQuestionIndex);
        }
    }

    // 上一題
    function goToPreviousQuestion() {
        if (currentQuestionIndex > 0) {
            currentQuestionIndex--;
            showQuestion(currentQuestionIndex);
        }
    }

    // 計時器相關函數 (保持不變)
    function startTimer() {
        timerInterval = setInterval(function() {
            totalSeconds++;
            const minutes = Math.floor(totalSeconds / 60).toString().padStart(2, '0');
            const seconds = (totalSeconds % 60).toString().padStart(2, '0');
            if (timerEl) timerEl.textContent = `${minutes}:${seconds}`;
        }, 1000);
    }

    function stopTimer() {
        clearInterval(timerInterval);
    }

    // 提交測試 - 修改為非同步驗證
    async function submitQuiz() {
        const unansweredIndexes = userAnswers
            .map((ans, idx) => (!ans || (Array.isArray(ans) && ans.length === 0)) ? idx + 1 : null)
            .filter(idx => idx !== null);

        if (unansweredIndexes.length > 0) {
            alert(`請完成所有題目才能提交！\n尚未作答題號：${unansweredIndexes.join(', ')}`);
            return;
        }
        stopTimer();
        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.textContent = '提交中...';
        }

        let correctCount = 0;
        reviewDetails = []; // 清空/初始化複習詳情

        // 建立一個 Promise 陣列來儲存所有 API 呼叫
        const validationPromises = quizQuestions.map((question, index) => {
            const userAnswerForThisQuestion = userAnswers[index] || [];
            return new Promise((resolve, reject) => {
                if (typeof window.checkAnswer === 'function') {
                    window.checkAnswer(question.id, userAnswerForThisQuestion, (responseData) => {
                        if (responseData && typeof responseData.correct !== 'undefined' && typeof responseData.actualAnswer !== 'undefined') {
                            if (responseData.correct) {
                                correctCount++;
                            }
                            // 儲存詳細資訊供複習
                            reviewDetails[index] = {
                                questionId: question.id,
                                questionText: question.question,
                                media: question.media,
                                options: question.options,
                                userAnswer: userAnswerForThisQuestion,
                                correctAnswer: responseData.actualAnswer,
                                isCorrect: responseData.correct,
                                type: question.type
                            };
                            resolve(); // 此 Promise 完成
                        } else {
                            console.error("來自 check_answer.php 的回應格式不正確:", responseData, "題目ID:", question.id);
                            reviewDetails[index] = { // 即使出錯也記錄基本資訊
                                questionId: question.id,
                                questionText: question.question,
                                media: question.media,
                                options: question.options,
                                userAnswer: userAnswerForThisQuestion,
                                correctAnswer: ['錯誤：後端未返回正確答案'],
                                isCorrect: false,
                                type: question.type,
                                error: "後端回應格式錯誤或資料缺失"
                            };
                            // 即使單個API呼叫失敗，我們也 resolve，但在 reviewDetails 中記錄錯誤
                            // 或者可以選擇 reject，然後在 Promise.all 的 catch 中處理
                            resolve(); // 或 reject(new Error(...)) 看您希望如何處理部分失敗
                        }
                    });
                } else {
                    reject(new Error("全域函數 checkAnswer 未定義。請檢查 index.php。"));
                }
            });
        });

        try {
            await Promise.all(validationPromises); // 等待所有答案都從後端驗證完畢

            const finalScore = quizQuestions.length > 0 ? Math.round((correctCount / quizQuestions.length) * 100) : 0;
            const endTime = new Date();
            const timeDiff = Math.floor((endTime - startTime) / 1000);
            const minutes = Math.floor(timeDiff / 60);
            const seconds = timeDiff % 60;

            if (quizContainer) quizContainer.classList.add('hidden');
            if (resultsContainer) resultsContainer.classList.remove('hidden');

            if (scoreDisplay) scoreDisplay.textContent = `得分: ${finalScore}% (${correctCount}/${quizQuestions.length})`;
            if (timeTaken) timeTaken.textContent = `用時: ${minutes}分${seconds}秒`;

            let summaryText = '';
            if (finalScore >= 90) {
                summaryText = '真假啦';
            } else if (finalScore >= 70) {
                summaryText = '通過邊緣';
            } else if (finalScore >= 60) {
                summaryText = '可憐！';
            } else {
                summaryText = '你是爛透了';
            }
            if (resultsSummary) resultsSummary.textContent = summaryText;

        } catch (error) {
            console.error("提交答案過程中發生嚴重錯誤:", error);
            alert("提交答案過程中發生錯誤。\n" + error.message);
            // 即使出錯，也嘗試顯示已有的結果，或者一個通用錯誤訊息
            if (quizContainer) quizContainer.classList.add('hidden');
            if (resultsContainer) resultsContainer.classList.remove('hidden');
            if (scoreDisplay) scoreDisplay.textContent = `得分計算出錯，請聯繫管理員。`;
        } finally {
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.textContent = '提交答案';
            }
        }
    }


    // 查看答題詳情 - 使用 reviewDetails
    function showReview() {
        if (resultsContainer) resultsContainer.classList.add('hidden');
        if (reviewContainer) reviewContainer.classList.remove('hidden');
        if (reviewList) reviewList.innerHTML = ''; // 清空

        let hasErrorsToShow = false;
        if (reviewDetails && reviewDetails.length > 0) {
            reviewDetails.forEach((detail, globalIndex) => { // globalIndex 是 reviewDetails 中的索引
                if (!detail || detail.isCorrect) return; // 只顯示錯誤的題目

                hasErrorsToShow = true;
                const typeText = detail.type === 'single' ? '單選題' : '複選題';
                // 確保 detail.options 是陣列
                const optionsText = Array.isArray(detail.options) ? detail.options.map(opt => `${opt.value}. ${opt.label}`).join('<br>') : '選項資料錯誤';
                const userAnswerText = Array.isArray(detail.userAnswer) && detail.userAnswer.length > 0 ? detail.userAnswer.join(', ') : '未作答';
                const correctAnswerText = Array.isArray(detail.correctAnswer) ? detail.correctAnswer.join(', ') : 'N/A';

                let mediaContentHTML = '';
                if (detail.media) {
                    // 複製 renderMedia 的邏輯或簡化版
                    const tempMediaContainer = document.createElement('div');
                    renderMedia(tempMediaContainer, detail.media);
                    mediaContentHTML = `<div class="review-media">${tempMediaContainer.innerHTML}</div>`;
                }

                const reviewItem = document.createElement('div');
                reviewItem.className = `review-item incorrect`;
                reviewItem.innerHTML = `
                    <div class="review-question-number">題目 ${globalIndex + 1} (ID: ${detail.questionId || 'N/A'})</div>
                    <div class="review-question-type">[${typeText}]</div>
                    <div class="review-question-text">${detail.questionText || '題目文字遺失'}</div>
                    ${mediaContentHTML}
                    <div class="review-options"><b>選項：</b><br>${optionsText}</div>
                    <div class="review-answers">
                        <div><b>您的答案：</b><span class="user-answer">${userAnswerText}</span></div>
                        <div><b>正確答案：</b><span class="correct-answer">${correctAnswerText}</span></div>
                    </div>
                    <div class="review-status">✗ 錯誤 ${detail.error ? `(${detail.error})` : ''}</div>
                `;
                if (reviewList) reviewList.appendChild(reviewItem);
            });
        }

        if (!hasErrorsToShow) {
            if (reviewList) reviewList.innerHTML = '<p>太棒了！所有題目都答對了，或者沒有可供檢視的錯誤題目。</p>';
        }
    }

    // 返回结果页面 (保持不變)
    function backToResults() {
        if (reviewContainer) reviewContainer.classList.add('hidden');
        if (resultsContainer) resultsContainer.classList.remove('hidden');
    }

// 在 function.js 中
// ... (其他變數和 DOM 元素獲取保持不變) ...
// 假設 initialPromptContainer 已經在檔案開頭被獲取：
// const initialPromptContainer = document.getElementById('initial-prompt-container');

function restartQuiz() {
    if (timerInterval) clearInterval(timerInterval);
    totalSeconds = 0;
    if (timerEl) timerEl.textContent = "00:00";

    // 隱藏所有測驗階段的容器
    if (quizContainer) quizContainer.classList.add('hidden');
    if (resultsContainer) resultsContainer.classList.add('hidden');
    if (reviewContainer) reviewContainer.classList.add('hidden');

    // ----- 修改開始：重置到初始提示狀態 -----
    if (initialPromptContainer) {
        initialPromptContainer.classList.remove('hidden'); // 顯示初始提示區塊
    }

    if (startBtn) {
        startBtn.style.display = ''; // 確保開始按鈕可見
        startBtn.disabled = false;   // 確保按鈕可點擊
        // 根據 currentQuizType 更新按鈕文字 (currentQuizType 應該是全域可訪問的)
// 根據 currentQuizType 更新按鈕文字 (currentQuizType 應該是全域可訪問的)
    let quizTypeName = '';
    if (typeof currentQuizType !== 'undefined') {
        if (currentQuizType === 'web') {
        quizTypeName = '網站管理實務';
    }   else if (currentQuizType === 'project') {
        quizTypeName = '專案管理';
    }   else if (currentQuizType === 'database') {
         quizTypeName = '資料庫管理';
    }   else if (currentQuizType === 'linux') {
         quizTypeName = 'linux系統';
    }
}
startBtn.textContent = quizTypeName ? `開始 ${quizTypeName} 測驗` : '測驗開始';
    }

    // 如果您之前有 welcomeScreen，並且希望在點擊 index.php 的選擇後不再顯示它，
    // 而是直接顯示 initial-prompt-container，那麼這裡可以不用管 welcomeScreen。
    // 如果 quiz.php 本身就沒有 welcomeScreen 元素，那這行可以刪除。
    // if (welcomeScreen) welcomeScreen.classList.remove('hidden'); // 取決於您的流程設計

    // 清空/重置測驗相關的 UI 元素
    if (questionText) questionText.innerHTML = ''; // 清空題目文字區域
    if (optionsContainer) optionsContainer.innerHTML = '';
    if (mediaContainer) mediaContainer.innerHTML = '';
    if (questionNumber) questionNumber.textContent = '';
    if (progressEl) progressEl.textContent = "0 / 0";
    if (jumpInput) jumpInput.value = "";
    // ----- 修改結束 -----

    // 重置 JavaScript 狀態變數
    currentQuestionIndex = 0;
    quizQuestions = [];
    userAnswers = [];
    reviewDetails = [];
}
});