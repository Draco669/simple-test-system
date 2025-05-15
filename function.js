// function.js (修改後版本 - 與 PHP 後端 API 配合)
document.addEventListener('DOMContentLoaded', function() {
    // 初始化变量
    let quizQuestions = [];
    let currentQuestionIndex = 0;
    let userAnswers = []; // 儲存使用者對每個問題的答案陣列 (例如 [['A'], ['B', 'C'], ...])
    let reviewDetails = [];
    let timerInterval;
    let startTime;
    let totalSeconds = 0;

    // DOM元素
    const startBtn = document.getElementById('startBtn');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const submitBtn = document.getElementById('submitBtn');
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
    const initialPromptContainer = document.getElementById('initial-prompt-container');


    // 事件监听器
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

    function sampleArray(array, count) {
        if (!array || array.length === 0) {
            return [];
        }
        const numToSample = Math.min(count, array.length);
        const shuffled = [...array].sort(() => 0.5 - Math.random());
        return shuffled.slice(0, numToSample);
    }

    async function startQuiz() {
        if (startBtn) startBtn.style.display = 'none';
        if (initialPromptContainer) initialPromptContainer.classList.add('hidden');
        if (quizContainer) quizContainer.classList.remove('hidden');

        if (questionText) questionText.textContent = '題目載入中，請稍候...';
        if (optionsContainer) optionsContainer.innerHTML = '';
        if (mediaContainer) mediaContainer.innerHTML = '';
        if (questionNumber) questionNumber.textContent = '';
        if (progressEl) progressEl.textContent = '0 / 0';

        try {
            if (typeof currentQuizType === 'undefined' || !currentQuizType) {
                throw new Error("未定義測驗類型 (currentQuizType)，無法載入題目。");
            }

            // 使用在 quiz.php 中定義的 fetchQuestions 函數
            const response = await new Promise((resolve, reject) => {
                if (typeof window.fetchQuestions === 'function') {
                    window.fetchQuestions(resolve); // resolve 將接收 {data: [...], error?: "..."}
                } else {
                    reject(new Error("全域函數 fetchQuestions 未定義。請檢查 quiz.php。"));
                }
            });

            if (response.error || !response.data || !Array.isArray(response.data)) {
                let errorMsg = '無法載入題目資料：';
                if (response.error) {
                    errorMsg += response.error;
                } else if (!response.data || response.data.length === 0) {
                    errorMsg += '題庫可能為空或未返回題目。';
                } else {
                    errorMsg += '題庫格式錯誤。';
                }
                alert(errorMsg);
                if (questionText) questionText.textContent = '載入題目失敗，請返回選擇。';
                if (startBtn) startBtn.style.display = '';
                if (initialPromptContainer) initialPromptContainer.classList.remove('hidden');
                if (quizContainer) quizContainer.classList.add('hidden');
                return;
            }
            
            // 從後端獲取的題目中隨機抽取50題，或全部（如果少於50題）
            quizQuestions = sampleArray(response.data, 50);


            if (quizQuestions.length === 0) {
                alert('抽取的題目數量為0，請檢查題庫或題庫類型。');
                if (questionText) questionText.textContent = '無可用題目，請返回選擇其他測驗。';
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
                jumpInput.min = 1; // 確保最小值為1
                jumpInput.value = "1";
            }

            startTime = new Date();
            totalSeconds = 0;
            if (timerInterval) clearInterval(timerInterval);
            startTimer();

            showQuestion(currentQuestionIndex);
            updateProgress();

        } catch (error) {
            console.error("開始測驗時載入題目失敗:", error);
            if (questionText) questionText.innerHTML = `載入題目失敗：${error.message}<br>請檢查您的網路連線或聯繫管理員。`;
            if (startBtn) startBtn.style.display = '';
            if (initialPromptContainer) initialPromptContainer.classList.remove('hidden');
            if (quizContainer) quizContainer.classList.add('hidden');
        }
    }

    function renderMedia(container, mediaObject) {
        if (!container) return;
        container.innerHTML = ''; // 清空舊內容

        if (!mediaObject || !mediaObject.data) {
            return;
        }

        if (mediaObject.type === 'table' && Array.isArray(mediaObject.data)) {
            const table = document.createElement('table');
            mediaObject.data.forEach(rowDataArray => {
                if (Array.isArray(rowDataArray)) {
                    const rowElement = table.insertRow();
                    rowDataArray.forEach(cellContent => {
                        const cellElement = rowElement.insertCell();
                        cellElement.innerHTML = cellContent;
                    });
                } else if (typeof rowDataArray === 'string') {
                    const rowElement = table.insertRow();
                    const cellElement = rowElement.insertCell();
                    cellElement.colSpan = 100;
                    cellElement.innerHTML = rowDataArray;
                }
            });
            container.appendChild(table);
        } else if (mediaObject.type === 'image' && typeof mediaObject.data === 'string') { // 假設圖片路徑在 data 中
            const img = document.createElement('img');
            img.src = mediaObject.data; // 或者 mediaObject.src 如果您的資料結構是這樣
            img.alt = mediaObject.alt || '題目圖片';
            container.appendChild(img);
        } else if (typeof mediaObject === 'string' && mediaObject.startsWith('<img')) { // 直接是 HTML 字符串
             container.innerHTML = mediaObject;
        }
    }

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
        if (questionText) questionText.innerHTML = question.question; // 允許題目文字包含HTML

        if (questionTypeEl) {
            if (question.type === 'single') {
                questionTypeEl.textContent = '單選題';
                questionTypeEl.className = 'question-tag single-choice';
            } else {
                questionTypeEl.textContent = '複選題';
                questionTypeEl.className = 'question-tag multiple-choice';
            }
        }

        if (mediaContainer) {
            renderMedia(mediaContainer, question.media);
        }

        if (optionsContainer) optionsContainer.innerHTML = '';
        if (question.options && Array.isArray(question.options)) {
            question.options.forEach((option) => {
                const optionEl = document.createElement('div');
                optionEl.className = 'option';
                const inputType = question.type === 'single' ? 'radio' : 'checkbox';
                const inputName = `question${index}`;

                const currentAnswerForQuestion = userAnswers[index] || [];
                const isSelected = currentAnswerForQuestion.includes(option.value);

                const inputEl = document.createElement('input');
                inputEl.type = inputType;
                inputEl.name = inputName;
                inputEl.value = option.value;
                inputEl.id = `option-${index}-${option.value.replace(/[^a-zA-Z0-9-_]/g, '')}`; // 確保ID有效
                inputEl.checked = isSelected;

                const labelEl = document.createElement('label');
                labelEl.htmlFor = inputEl.id;
                labelEl.className = 'option-text';
                labelEl.innerHTML = `${option.value}. ${option.label}`; // 允許選項標籤包含HTML

                optionEl.appendChild(inputEl);
                optionEl.appendChild(labelEl);

                if (isSelected) {
                    optionEl.classList.add('selected');
                }

                optionEl.addEventListener('click', function(event) {
                    const clickedInput = this.querySelector('input');
                    if (!clickedInput) return;

                    if (question.type === 'single') {
                        userAnswers[index] = [clickedInput.value];
                        document.querySelectorAll(`#options-container .option`).forEach(opt => {
                            opt.classList.remove('selected');
                            opt.querySelector('input').checked = false;
                        });
                        this.classList.add('selected');
                        clickedInput.checked = true;
                    } else {
                        const value = clickedInput.value;
                        if (!Array.isArray(userAnswers[index])) {
                            userAnswers[index] = [];
                        }
                        const valueIndex = userAnswers[index].indexOf(value);
                        if (clickedInput.checked) { // 如果點擊後是選中
                            if (valueIndex === -1) {
                                userAnswers[index].push(value);
                            }
                            this.classList.add('selected');
                        } else { // 如果點擊後是取消選中
                            if (valueIndex > -1) {
                                userAnswers[index].splice(valueIndex, 1);
                            }
                            this.classList.remove('selected');
                        }
                    }
                    updateProgress();
                });
                if (optionsContainer) optionsContainer.appendChild(optionEl);
            });
        }

        if (prevBtn) prevBtn.disabled = index === 0;
        if (nextBtn) nextBtn.disabled = index === quizQuestions.length -1 && quizQuestions.length === 0;


        if (index === quizQuestions.length - 1) {
            if (nextBtn) nextBtn.classList.add('hidden');
            if (submitBtn) submitBtn.classList.remove('hidden');
        } else {
            if (nextBtn) nextBtn.classList.remove('hidden');
            if (submitBtn) submitBtn.classList.add('hidden');
        }
         if (jumpInput) jumpInput.value = index + 1; // 更新跳題框的數字
    }

    function updateProgress() {
        if (!progressEl || !quizQuestions || quizQuestions.length === 0) return;
        const answeredCount = userAnswers.filter(answer => answer && answer.length > 0).length;
        progressEl.textContent = `${answeredCount} / ${quizQuestions.length}`;
    }

    function goToNextQuestion() {
        if (currentQuestionIndex < quizQuestions.length - 1) {
            currentQuestionIndex++;
            showQuestion(currentQuestionIndex);
        }
    }

    function goToPreviousQuestion() {
        if (currentQuestionIndex > 0) {
            currentQuestionIndex--;
            showQuestion(currentQuestionIndex);
        }
    }

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

    // 提交測試 - 修改為一次性非同步驗證
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

        // 準備要發送到後端的資料
        const answersToSubmit = quizQuestions.map((question, index) => {
            return {
                id: question.id,
                user_answer: userAnswers[index] || []
            };
        });

        try {
            // 使用在 quiz.php 中定義的 checkAnswer 函數
            // 這個全域 checkAnswer 函數內部應該處理 fetch 到 api/check_answer.php
            const backendResults = await new Promise((resolve, reject) => {
                if (typeof window.checkAllAnswers === 'function') { // 假設有一個新的全域函數來處理批量驗證
                    window.checkAllAnswers(answersToSubmit, resolve); // resolve 將接收後端返回的結果陣列
                } else {
                     // Fallback or error if the specific batch function isn't defined
                     // For now, let's assume the old quiz.php checkAnswer can be adapted or a new one is made
                    console.warn("window.checkAllAnswers is not defined. Attempting to use a modified checkAnswer or assuming it's handled in quiz.php");
                    // This part needs to be robust. For this example, I'll proceed assuming quiz.php's
                    // `checkAnswer` or a new function `checkAllAnswers` will be called and will
                    // POST the `answersToSubmit` to the modified `api/check_answer.php`.
                    // The backend `api/check_answer.php` now expects `quiz_type` and `answers` array.
                    fetch(`api/check_answer.php`, {
                        method: 'POST',
                        headers: {'Content-Type': 'application/json'},
                        body: JSON.stringify({
                            quiz_type: currentQuizType, // currentQuizType 應該是全域可訪問的
                            answers: answersToSubmit
                        })
                    })
                    .then(res => {
                        if (!res.ok) return res.text().then(text => { throw new Error(`驗證答案失敗 (${res.status}): ${text.substring(0,100)}`) });
                        return res.json();
                    })
                    .then(data => resolve(data)) // data 應該是後端返回的結果陣列
                    .catch(error => reject(error));
                }
            });


            if (!Array.isArray(backendResults)) {
                throw new Error("後端返回的答案驗證結果格式不正確。");
            }

            let correctCount = 0;
            reviewDetails = []; // 清空/初始化複習詳情

            // 根據後端返回的批量結果處理
            backendResults.forEach(result => {
                const questionIndex = quizQuestions.findIndex(q => q.id === result.id);
                if (questionIndex > -1) {
                    const question = quizQuestions[questionIndex];
                    if (result.correct) {
                        correctCount++;
                    }
                    reviewDetails[questionIndex] = { // 使用原始順序儲存
                        questionId: question.id,
                        questionText: question.question,
                        media: question.media,
                        options: question.options,
                        userAnswer: userAnswers[questionIndex] || [],
                        correctAnswer: result.actualAnswer || [],
                        isCorrect: result.correct,
                        type: question.type,
                        error: result.error // 如果後端在單個題目上報告了錯誤
                    };
                } else {
                    console.warn(`從後端收到的結果中找不到對應的前端題目ID: ${result.id}`);
                }
            });


            const finalScore = quizQuestions.length > 0 ? Math.round((correctCount / quizQuestions.length) * 100) : 0;
            const endTime = new Date();
            const timeDiff = Math.floor((endTime - startTime) / 1000);
            const minutes = Math.floor(timeDiff / 60);
            const seconds = timeDiff % 60;

            if (quizContainer) quizContainer.classList.add('hidden');
            if (resultsContainer) resultsContainer.classList.remove('hidden');

            if (scoreDisplay) scoreDisplay.textContent = `得分: ${finalScore}% (${correctCount}/${quizQuestions.length})`;
            if (timeTaken) timeTaken.textContent = `用時: ${minutes}分 ${seconds}秒`;

            let summaryText = '';
            if (finalScore >= 90) {
                summaryText = '表現優異！';
            } else if (finalScore >= 70) {
                summaryText = '做得不錯！';
            } else if (finalScore >= 60) {
                summaryText = '還有進步空間。';
            } else {
                summaryText = '再接再厲！';
            }
            if (resultsSummary) resultsSummary.textContent = summaryText;

        } catch (error) {
            console.error("提交答案過程中發生嚴重錯誤:", error);
            alert("提交答案過程中發生錯誤。\n" + error.message);
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


    function showReview() {
        if (resultsContainer) resultsContainer.classList.add('hidden');
        if (reviewContainer) reviewContainer.classList.remove('hidden');
        if (reviewList) reviewList.innerHTML = '';

        let hasErrorsToShow = false;
        if (reviewDetails && reviewDetails.length > 0) {
             // 確保 reviewDetails 是按題目原始順序排列的
            quizQuestions.forEach((originalQuestion, index) => {
                const detail = reviewDetails.find(rd => rd && rd.questionId === originalQuestion.id); // 根據 ID 查找

                if (!detail || detail.isCorrect) {
                     // 如果想顯示所有題目，包括答對的，可以在此處添加邏輯
                    return; // 目前：只顯示錯誤的題目
                }
                hasErrorsToShow = true;

                const typeText = detail.type === 'single' ? '單選題' : '複選題';
                const optionsText = Array.isArray(detail.options) ? detail.options.map(opt => `${opt.value}. ${opt.label}`).join('<br>') : '選項資料錯誤';
                const userAnswerText = Array.isArray(detail.userAnswer) && detail.userAnswer.length > 0 ? detail.userAnswer.join(', ') : '未作答';
                const correctAnswerText = Array.isArray(detail.correctAnswer) ? detail.correctAnswer.join(', ') : 'N/A';

                let mediaContentHTML = '';
                if (detail.media) {
                    const tempMediaContainer = document.createElement('div');
                    renderMedia(tempMediaContainer, detail.media);
                    mediaContentHTML = `<div class="review-media">${tempMediaContainer.innerHTML}</div>`;
                }

                const reviewItem = document.createElement('div');
                reviewItem.className = `review-item ${detail.isCorrect ? 'correct' : 'incorrect'}`;
                reviewItem.innerHTML = `
                    <div class="review-question-number">題目 ${index + 1} (ID: ${detail.questionId || 'N/A'})</div>
                    <div class="review-question-type">[${typeText}]</div>
                    <div class="review-question-text">${detail.questionText || '題目文字遺失'}</div>
                    ${mediaContentHTML}
                    <div class="review-options"><b>選項：</b><br>${optionsText}</div>
                    <div class="review-answers">
                        <div><b>您的答案：</b><span class="user-answer">${userAnswerText}</span></div>
                        <div><b>正確答案：</b><span class="correct-answer">${correctAnswerText}</span></div>
                    </div>
                    <div class="review-status">${detail.isCorrect ? '✓ 正確' : `✗ 錯誤 ${detail.error ? `(${detail.error})` : ''}`}</div>
                `;
                if (reviewList) reviewList.appendChild(reviewItem);
            });
        }

        if (!hasErrorsToShow && reviewList) {
            reviewList.innerHTML = '<p>太棒了！所有題目都答對了，或者沒有可供檢視的錯誤題目。</p>';
        }
    }

    function backToResults() {
        if (reviewContainer) reviewContainer.classList.add('hidden');
        if (resultsContainer) resultsContainer.classList.remove('hidden');
    }

    function restartQuiz() {
        if (timerInterval) clearInterval(timerInterval);
        totalSeconds = 0;
        if (timerEl) timerEl.textContent = "00:00";

        if (quizContainer) quizContainer.classList.add('hidden');
        if (resultsContainer) resultsContainer.classList.add('hidden');
        if (reviewContainer) reviewContainer.classList.add('hidden');
        if (initialPromptContainer) initialPromptContainer.classList.remove('hidden');

        if (startBtn) {
            startBtn.style.display = '';
            startBtn.disabled = false;
            let quizTypeName = '';
            if (typeof currentQuizType !== 'undefined') {
                // 這裡的 quiz_type_name 獲取邏輯需要與 quiz.php 中的保持一致
                if (currentQuizType === 'web') quizTypeName = '網站管理實務';
                else if (currentQuizType === 'project') quizTypeName = '專案管理';
                else if (currentQuizType === 'linux') quizTypeName = 'linux系統';
                else if (currentQuizType === 'database') quizTypeName = '資料庫管理';
            }
            startBtn.textContent = quizTypeName ? `開始 ${quizTypeName} 測驗` : '開始測驗';
        }

        if (questionText) questionText.innerHTML = '';
        if (optionsContainer) optionsContainer.innerHTML = '';
        if (mediaContainer) mediaContainer.innerHTML = '';
        if (questionNumber) questionNumber.textContent = '';
        if (progressEl) progressEl.textContent = "0 / 0";
        if (jumpInput) jumpInput.value = "";

        currentQuestionIndex = 0;
        quizQuestions = [];
        userAnswers = [];
        reviewDetails = [];
    }
});