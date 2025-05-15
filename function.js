// function.js (UI/UX 細化修改)
document.addEventListener('DOMContentLoaded', function() {
    // 初始化变量
    let quizQuestions = [];
    let currentQuestionIndex = 0;
    let userAnswers = [];
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

    // 新增：通用訊息提示元素 (可以加在 HTML 的某個固定位置)
    const messageContainer = document.createElement('div');
    messageContainer.id = 'toast-message-container';
    document.body.appendChild(messageContainer);


    // --- UI Helper Functions ---
    function showLoading(button, text = '處理中...') {
        if (button) {
            button.disabled = true;
            button.innerHTML = `<span class="spinner"></span> ${text}`;
        }
    }

    function hideLoading(button, originalText) {
        if (button) {
            button.disabled = false;
            button.innerHTML = originalText;
        }
    }

    function showToast(message, type = 'info', duration = 3000) {
        const toast = document.createElement('div');
        toast.className = `toast toast-${type}`;
        toast.textContent = message;
        messageContainer.appendChild(toast);

        setTimeout(() => {
            toast.classList.add('fade-out');
            setTimeout(() => {
                if (toast.parentNode) { // 再次檢查以防萬一
                    messageContainer.removeChild(toast);
                }
            }, 500); // 等待淡出動畫完成
        }, duration);
    }

    // 事件监听器
    if (startBtn) startBtn.addEventListener('click', startQuiz);
    if (prevBtn) prevBtn.addEventListener('click', goToPreviousQuestion);
    if (nextBtn) nextBtn.addEventListener('click', goToNextQuestion);
    if (submitBtn) submitBtn.addEventListener('click', submitQuiz);
    if (reviewBtn) reviewBtn.addEventListener('click', showReview);
    if (restartBtn) restartBtn.addEventListener('click', restartQuiz);
    if (backToResultsBtn) backToResultsBtn.addEventListener('click', backToResults);

    if (jumpBtn && jumpInput) {
        const performJump = () => {
            if (quizQuestions.length === 0) {
                showToast('題目尚未載入完成。', 'warning');
                return;
            }
            const val = parseInt(jumpInput.value, 10);
            if (!isNaN(val) && val >= 1 && val <= quizQuestions.length) {
                currentQuestionIndex = val - 1;
                showQuestion(currentQuestionIndex);
            } else {
                showToast(`請輸入 1 到 ${quizQuestions.length} 之間的題號。`, 'error');
            }
        };
        jumpBtn.addEventListener('click', performJump);
        jumpInput.addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault(); // 防止表單提交 (如果有的話)
                performJump();
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
        const originalStartBtnText = startBtn.textContent;
        showLoading(startBtn, '載入中...');

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

            const response = await new Promise((resolve, reject) => {
                if (typeof window.fetchQuestions === 'function') {
                    window.fetchQuestions(resolve);
                } else {
                    reject(new Error("全域函數 fetchQuestions 未定義。"));
                }
            });

            if (response.error || !response.data || !Array.isArray(response.data)) {
                let errorMsg = '無法載入題目資料：';
                if (response.error) errorMsg += response.error;
                else if (!response.data || response.data.length === 0) errorMsg += '題庫可能為空或未返回題目。';
                else errorMsg += '題庫格式錯誤。';
                
                showToast(errorMsg, 'error', 5000);
                if (questionText) questionText.textContent = '載入題目失敗，請返回選擇。';
                // UI 重置
                if (initialPromptContainer) initialPromptContainer.classList.remove('hidden');
                if (quizContainer) quizContainer.classList.add('hidden');
                hideLoading(startBtn, originalStartBtnText);
                return;
            }
            
            quizQuestions = sampleArray(response.data, 50);

            if (quizQuestions.length === 0) {
                showToast('抽取的題目數量為0，請檢查題庫或題庫類型。', 'warning', 5000);
                if (questionText) questionText.textContent = '無可用題目，請返回選擇其他測驗。';
                if (initialPromptContainer) initialPromptContainer.classList.remove('hidden');
                if (quizContainer) quizContainer.classList.add('hidden');
                hideLoading(startBtn, originalStartBtnText);
                return;
            }

            currentQuestionIndex = 0;
            userAnswers = Array(quizQuestions.length).fill(null).map(() => []);
            reviewDetails = [];

            if (progressEl) progressEl.textContent = `0 / ${quizQuestions.length}`;
            if (jumpInput) {
                jumpInput.max = quizQuestions.length;
                jumpInput.min = 1;
                jumpInput.value = "1";
            }

            startTime = new Date();
            totalSeconds = 0;
            if (timerInterval) clearInterval(timerInterval);
            startTimer();

            showQuestion(currentQuestionIndex);
            updateProgress();
            showToast('測驗開始！', 'success');

        } catch (error) {
            console.error("開始測驗時載入題目失敗:", error);
            showToast(`載入題目失敗：${error.message}`, 'error', 5000);
            if (questionText) questionText.innerHTML = `載入題目失敗：${error.message}<br>請檢查您的網路連線或聯繫管理員。`;
            if (initialPromptContainer) initialPromptContainer.classList.remove('hidden');
            if (quizContainer) quizContainer.classList.add('hidden');
        } finally {
            hideLoading(startBtn, originalStartBtnText);
             // 即使成功開始，startBtn 也應該保持隱藏或禁用，直到 restartQuiz
            if (startBtn) startBtn.style.display = 'none';
        }
    }

    function renderMedia(container, mediaObject) {
        if (!container) return;
        container.innerHTML = ''; 

        if (!mediaObject || (!mediaObject.data && !mediaObject.src && typeof mediaObject !== 'string')) {
            return;
        }
        
        let mediaContent = mediaObject.data || mediaObject.src || mediaObject;

        if (mediaObject.type === 'table' && Array.isArray(mediaContent)) {
            const table = document.createElement('table');
            mediaContent.forEach(rowDataArray => {
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
        } else if (mediaObject.type === 'image' && typeof mediaContent === 'string') {
            const img = document.createElement('img');
            img.src = mediaContent;
            img.alt = mediaObject.alt || '題目圖片';
            container.appendChild(img);
        } else if (typeof mediaContent === 'string' && mediaContent.trim().startsWith('<img')) {
             container.innerHTML = mediaContent;
        } else if (typeof mediaContent === 'string') { // 處理純文字媒體內容
            const div = document.createElement('div');
            div.innerHTML = mediaContent; // 如果媒體內容本身就是HTML，直接插入
            container.appendChild(div);
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
        if (questionText) questionText.innerHTML = question.question;

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
                inputEl.id = `option-${index}-${option.value.replace(/[^a-zA-Z0-9-_]/g, '')}`;
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
                    const clickedInput = this.querySelector('input');
                    if (!clickedInput) return;
                    
                    // 手動同步 input 的 checked 狀態 (對 checkbox 特別重要)
                    if (question.type === 'multiple') {
                        if (event.target !== clickedInput) { // 如果點擊的是 div 或 label
                            clickedInput.checked = !clickedInput.checked;
                        }
                    }


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

                        if (clickedInput.checked) {
                            if (valueIndex === -1) {
                                userAnswers[index].push(value);
                            }
                            this.classList.add('selected');
                        } else {
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
        if (nextBtn) nextBtn.disabled = (index === quizQuestions.length - 1 || quizQuestions.length === 0) ;


        if (index === quizQuestions.length - 1) {
            if (nextBtn) nextBtn.classList.add('hidden');
            if (submitBtn) submitBtn.classList.remove('hidden');
        } else {
            if (nextBtn) nextBtn.classList.remove('hidden');
            if (submitBtn) submitBtn.classList.add('hidden');
        }
        if (jumpInput) jumpInput.value = index + 1;
    }

    function updateProgress() {
        if (!progressEl || !quizQuestions || quizQuestions.length === 0) return;
        const answeredCount = userAnswers.filter(answer => answer && answer.length > 0).length;
        progressEl.textContent = `${answeredCount} / ${quizQuestions.length}`;
        // 可以考慮更新視覺進度條
        const progressBar = document.getElementById('progress-bar-fill'); // 假設你有一個進度條元素
        if (progressBar) {
            const percentage = quizQuestions.length > 0 ? (answeredCount / quizQuestions.length) * 100 : 0;
            progressBar.style.width = `${percentage}%`;
        }
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

    async function submitQuiz() {
        const unansweredIndexes = userAnswers
            .map((ans, idx) => (!ans || (Array.isArray(ans) && ans.length === 0)) ? idx + 1 : null)
            .filter(idx => idx !== null);

        if (unansweredIndexes.length > 0) {
            showToast(`請完成所有題目才能提交！\n尚未作答題號：${unansweredIndexes.join(', ')}`, 'warning', 5000);
            return;
        }
        stopTimer();
        const originalSubmitBtnText = submitBtn.textContent;
        showLoading(submitBtn, '提交中...');

        const answersToSubmit = quizQuestions.map((question, index) => {
            return {
                id: question.id,
                user_answer: userAnswers[index] || []
            };
        });

        try {
            const backendResults = await fetch(`api/check_answer.php`, {
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify({
                    quiz_type: currentQuizType,
                    answers: answersToSubmit
                })
            })
            .then(res => {
                if (!res.ok) return res.text().then(text => { throw new Error(`驗證答案失敗 (${res.status}): ${text.substring(0,200)}`) });
                return res.json();
            });

            if (!Array.isArray(backendResults)) {
                throw new Error("後端返回的答案驗證結果格式不正確。");
            }

            let correctCount = 0;
            reviewDetails = [];

            backendResults.forEach(result => {
                const questionIndex = quizQuestions.findIndex(q => q.id === result.id);
                if (questionIndex > -1) {
                    const question = quizQuestions[questionIndex];
                    if (result.correct) {
                        correctCount++;
                    }
                    reviewDetails[questionIndex] = {
                        questionId: question.id,
                        questionText: question.question,
                        media: question.media,
                        options: question.options,
                        userAnswer: userAnswers[questionIndex] || [],
                        correctAnswer: result.actualAnswer || [],
                        isCorrect: result.correct,
                        type: question.type,
                        error: result.error
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
            if (finalScore >= 90) summaryText = '表現優異！太棒了！';
            else if (finalScore >= 70) summaryText = '做得不錯！接近完美！';
            else if (finalScore >= 60) summaryText = '恭喜通過！再接再厲！';
            else summaryText = '差一點，別灰心，下次會更好！';
            if (resultsSummary) resultsSummary.textContent = summaryText;
            showToast('答案已提交！查看您的結果。', 'success');

        } catch (error) {
            console.error("提交答案過程中發生嚴重錯誤:", error);
            showToast(`提交答案出錯：${error.message}`, 'error', 5000);
            if (quizContainer) quizContainer.classList.add('hidden');
            if (resultsContainer) resultsContainer.classList.remove('hidden');
            if (scoreDisplay) scoreDisplay.textContent = `得分計算出錯，請聯繫管理員。`;
        } finally {
            hideLoading(submitBtn, originalSubmitBtnText);
        }
    }

    function showReview() {
        if (resultsContainer) resultsContainer.classList.add('hidden');
        if (reviewContainer) reviewContainer.classList.remove('hidden');
        if (reviewList) reviewList.innerHTML = '';

        let hasErrorsToShow = false;
        if (reviewDetails && reviewDetails.length > 0) {
            quizQuestions.forEach((originalQuestion, index) => {
                const detail = reviewDetails.find(rd => rd && rd.questionId === originalQuestion.id);

                if (!detail) return; // 如果沒有這題的 review detail，跳過

                // 修改：即使答對也顯示，但錯誤的題目會有不同樣式
                // if (detail.isCorrect) return; // 原只顯示錯誤題目

                hasErrorsToShow = true; // 只要有題目就顯示

                const typeText = detail.type === 'single' ? '單選題' : '複選題';
                const optionsText = Array.isArray(detail.options) ? detail.options.map(opt => {
                    let labelClass = "";
                    if (!detail.isCorrect && Array.isArray(detail.userAnswer) && detail.userAnswer.includes(opt.value)) {
                        labelClass = "user-selected-wrong"; // 標記使用者選錯的
                    }
                    if (Array.isArray(detail.correctAnswer) && detail.correctAnswer.includes(opt.value)) {
                        labelClass += " correct-option-highlight"; // 高亮正確選項
                    }
                    return `<span class="${labelClass}">${opt.value}. ${opt.label}</span>`;
                }).join('<br>') : '選項資料錯誤';

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
                        <div><b>您的答案：</b><span class="user-answer ${detail.isCorrect ? '' : 'user-answer-incorrect'}">${userAnswerText}</span></div>
                        <div><b>正確答案：</b><span class="correct-answer">${correctAnswerText}</span></div>
                    </div>
                    <div class="review-status">${detail.isCorrect ? '<span class="status-correct">✓ 正確</span>' : `<span class="status-incorrect">✗ 錯誤</span> ${detail.error ? `(${detail.error})` : ''}`}</div>
                    ${(detail.explanation && !detail.isCorrect) ? `<div class="review-explanation"><b>詳解：</b>${detail.explanation}</div>` : ''}
                `;
                if (reviewList) reviewList.appendChild(reviewItem);
            });
        }

        if (!hasErrorsToShow && reviewList) {
            reviewList.innerHTML = '<p>太棒了！所有題目都答對了，或者沒有可供檢視的題目。</p>';
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
        if (initialPromptContainer) {
            initialPromptContainer.classList.remove('hidden');
            // 可以更新 initialPromptContainer 中的題目數量提示 (如果需要)
            const quizTypeH2 = initialPromptContainer.querySelector('h2');
            if (quizTypeH2 && typeof currentQuizType !== 'undefined') {
                 // 假設 h2 內容是 "準備開始【測驗類型】練習！"
                 // 你可能需要從 quiz.php 獲取 $quiz_type_name
            }
        }


        if (startBtn) {
            startBtn.style.display = '';
            // startBtn.disabled = false; // 在 startQuiz 開始時才禁用
            let quizTypeName = '';
            if (typeof currentQuizType !== 'undefined') {
                if (currentQuizType === 'web') quizTypeName = '網站管理實務';
                else if (currentQuizType === 'project') quizTypeName = '專案管理';
                else if (currentQuizType === 'linux') quizTypeName = 'linux系統';
                else if (currentQuizType === 'database') quizTypeName = '資料庫管理';
                // 注意：這裡的 quizTypeName 應該與 quiz.php 中的 $quiz_type_name 邏輯一致
            }
            // 確保按鈕文字被重置
            const originalText = quizTypeName ? `開始 ${quizTypeName} 測驗` : '開始測驗';
            hideLoading(startBtn, originalText); // 使用 hideLoading 重置按鈕狀態和文字
        }


        if (questionText) questionText.innerHTML = '';
        if (optionsContainer) optionsContainer.innerHTML = '';
        if (mediaContainer) mediaContainer.innerHTML = '';
        if (questionNumber) questionNumber.textContent = '';
        if (progressEl) progressEl.textContent = "0 / 0";
        if (jumpInput) jumpInput.value = "1"; // 重置跳題到第1題

        const progressBar = document.getElementById('progress-bar-fill');
        if (progressBar) progressBar.style.width = '0%';


        currentQuestionIndex = 0;
        quizQuestions = [];
        userAnswers = [];
        reviewDetails = [];
        showToast('測驗已重置。', 'info');
    }
});