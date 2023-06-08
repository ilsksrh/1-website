<?php
date_default_timezone_set('Asia/Almaty');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Volleyball Quiz</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap');
        *{
            box-sizing: border-box;}
        body{
            background-color: #b8c6db;
            background-image: linear-gradient(315deg, #b8c6db 0%, #f5f7f7 100%);
            font-family: 'Poppins', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            overflow: hidden;
            margin: 0;
        }
        .quiz-container{
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px 2px rgba(100, 100, 100, 0.1);
            width: 600px;
            overflow: hidden;
        }
        .quiz-header{
            padding: 4rem;
        }
        h2{
            padding: 1rem;
            text-align: center;
            margin: 0;
        }
        ul{
            list-style-type: none;
            padding: 0;
        }
        ul li{
            font-size: 1.2rem;
            margin: 1rem 0;
        }
        ul li label{
            cursor: pointer;
        }
        button{
            background-color: #03cae4;
            color: #fff;
            border: none;
            display: block;
            width: 100%;
            cursor: pointer;
            font-size: 1.1rem;
            font-family: inherit;
            padding: 1.3rem;
        }
        button:hover{
            background-color: #04adc4;
        }
        button:focus{
            outline: none;
            background-color: #44b927;
        }

        .result-heading {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .answer-info {
            font-size: 18px;
            color: #666;
            margin-bottom: 20px;
            margin-left: 10px;
        }

        .reload-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            display: block;
            width: 100%;
            cursor: pointer;
            font-size: 1.1rem;
            font-family: inherit;
            padding: 1.3rem;
        }

        .reload-btn:hover {
            background-color: #0069d9;
        }

    </style>
</head>
<body>
<input type="hidden" name="test_date" value="<?php echo date('Y-m-d H:i:s'); ?>">
<div class="quiz-container" id="quiz">
    <div class="quiz-header">
        <h2 id="question">Question Text</h2>
        <ul>
            <li>
                <input type="radio" name="answer" id="a" class="answer">
                <label for="a" id="a_text">Answer</label>
            </li>
            <li>
                <input type="radio" name="answer" id="b" class="answer">
                <label for="b" id="b_text">Answer</label>
            </li>
            <li>
                <input type="radio" name="answer" id="c" class="answer">
                <label for="c" id="c_text">Answer</label>
            </li>
            <li>
                <input type="radio" name="answer" id="d" class="answer">
                <label for="d" id="d_text">Answer</label>
            </li>
        </ul>
    </div>

    <button id="submit">Submit</button>
</div>

<script type="text/javascript"> const quizData = [
        {
            question: "How many people on each team are in the court?",
            a: "6",
            b: "10",
            c: "5",
            d: "7",
            correct: "a",
        },
        {
            question: "What was the original name of volleyball?",
            a: "Lacrosse",
            b: "Volley Ball",
            c: "Mintonette",
            d: "Badminton",
            correct: "c",
        },
        {
            question: "What is the player who specializes in defense called?",
            a: "Libero",
            b: "Freestyle",
            c: "Blocker",
            d: "Setter",
            correct: "a",
        },
        {
            question: "What happens when the ball lands on the line?",
            a: "The rally is replayed",
            b: 'It is considered "out"',
            c: 'It is considered "in"',
            d: "Both teams take points",
            correct: "c",
        },
        {
            question: "How many times can one team hit the ball on their side of the court?",
            a: "1",
            b: "5",
            c: "4",
            d: "3",
            correct: "d",
        },
        {
            question: "In what country was volleyball invented?",
            a: "USA",
            b: "Canada",
            c: "Australia",
            d: "Kazakhstan",
            correct: "a",
        },
    ];

    const quiz = document.getElementById('quiz');
    const answerEls = document.querySelectorAll('.answer');
    const questionEl = document.getElementById('question');
    const a_text = document.getElementById('a_text');
    const b_text = document.getElementById('b_text');
    const c_text = document.getElementById('c_text');
    const d_text = document.getElementById('d_text');
    const submitBtn = document.getElementById('submit');
    let currentQuiz = 0; //to keep track of which question the user is currently answering.
    let score = 0;
    let correctAnswers = 0;
    let incorrectAnswers = 0;

    alert("Now you are going to have a quiz. All questions are related to Volleyball game. Click 'Ok' if you are ready to start.");

    loadQuiz();

    function loadQuiz() { // allows the quiz questions and answer options to be displayed on a web page
        deselectAnswers(); //it ensures that any previously selected answers are deselected before loading the new question
        const currentQuizData = quizData[currentQuiz];
        questionEl.innerText = currentQuizData.question;
        a_text.innerText = currentQuizData.a;
        b_text.innerText = currentQuizData.b;
        c_text.innerText = currentQuizData.c;
        d_text.innerText = currentQuizData.d;
    }

    function deselectAnswers() {
        answerEls.forEach(function(answerEl) {
            // Set the checked property of each answer element to false
            answerEl.checked = false;
        });
    }

    function getSelected() {
        let answer;
        answerEls.forEach(function(answerEl) {
            if (answerEl.checked) {
                answer = answerEl.id;
            }
        });
        return answer;
    }

    submitBtn.addEventListener('click', function() {
        // Get the selected answer
        const answer = getSelected();

        // Check if answer is correct
        if (answer) { //it checks if a radio button has been selected.
            if (answer === quizData[currentQuiz].correct) {
                score++;
                correctAnswers++;
                submitBtn.style.backgroundColor = 'green';
            } else {
                incorrectAnswers++;
                submitBtn.style.backgroundColor = 'red';
            }

            currentQuiz++;

// Check if there are more questions to show
            if (currentQuiz < quizData.length) {
                loadQuiz();
            } else {
                const scoreHeader = document.createElement('h2');
                scoreHeader.id = 'result-heading';
                scoreHeader.textContent = `Quiz is finished!`;

                const correctAnswersElem = document.createElement('p');
                correctAnswersElem.className = 'answer-info';
                correctAnswersElem.textContent = `You can check your results in a result page`;

                const reloadBtn = document.createElement('button');
                reloadBtn.id = 'reload-btn';
                reloadBtn.textContent = 'Go to the result page';
                reloadBtn.onclick = function() {
                    window.location.href = "quiz_results2.0.php";
                };
                quiz.innerHTML = '';
                quiz.appendChild(scoreHeader);
                quiz.appendChild(reloadBtn);
            }
        }
    });

</script>
</body>
</html>