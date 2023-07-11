const question = document.getElementById("question");
const choices = Array.from(document.getElementsByClassName("choice-text")); // html collection | node list then convert to array
const progressText = document.getElementById('progressText');
const scoreText = document.getElementById('score');
const progressBarFull = document.getElementById('progressBarFull');
const game = document.getElementById('game');
const loader = document.getElementById('loader');


const CORRECT_BONUS = 10;
const MAX_QUESTIONS = 3;

let currentQuestion = {};
let acceptingAnswers = false;
let score = 0;
let questionCounter = 0;
let availableQuestions = [];

let questions = [];

// use the Fetch API to get question from json file
// fetch("questions.json")
//     .then( res => {
//         return res.json();
//     }).then(loadedQuestions => {
//         questions = loadedQuestions;
//         startGame();
//     })
//     .catch( err => {
//         console.log(err);
//     }); // always do catch


// use opentdb.com to Fetch questions online
fetch("https://opentdb.com/api.php?amount=9&category=9&difficulty=easy&type=multiple")
    .then( res => {
        return res.json();
    }).then(loadedQuestions => {
        // console.log(loadedQuestions.results);
        // convert the questions to new form
        questions = loadedQuestions.results.map( loadedQuestion => {
            const formattedQuestions = {
                question : loadedQuestion.question
            };

            const answerChoices = [...loadedQuestion.incorrect_answers];
            formattedQuestions.answer = Math.floor(Math.random() * 3) + 1;
            answerChoices.splice(
                formattedQuestions.answer - 1,
                0,
                loadedQuestion.correct_answer
            );

            answerChoices.forEach((choice, index) => {
                formattedQuestions["choice" + (index + 1) ] = choice;
            });

            return formattedQuestions;

        });
        // questions = loadedQuestions;
       
        
        startGame();
    })
    .catch( err => {
        console.log(err);
    }); // always do catch


startGame = () => {
    questionCounter = 0;
    score = 0;
    availableQuestions = [...questions]; // copying the questions 
    // console.log(availableQuestions);
    getNewQuestion();

    game.classList.remove("d-none");
    loader.classList.add("d-none");
}

getNewQuestion = () => {
    if (availableQuestions.length == 0 || questionCounter >= MAX_QUESTIONS) {
        localStorage.setItem("mostRecentScore", score);
        return window.location.assign("end.html");
    }

    questionCounter ++;
    progressText.innerText = `Question ${questionCounter}/${MAX_QUESTIONS}`;
    // Update the progress bar
    progressBarFull.style.width = `${(questionCounter / MAX_QUESTIONS) * 100}%`;

    // getting random number from 1 to 3
    const questionIndex = Math.floor(Math.random() * availableQuestions.length);
    currentQuestion = availableQuestions[questionIndex];
    question.innerText = currentQuestion.question;

    choices.forEach ( choice => {
        const number = choice.dataset["number"];
        choice.innerText = currentQuestion["choice" + number];
    });

    // removing selected question-answer
    availableQuestions.splice(questionIndex, 1);
    acceptingAnswers = true;
};

choices.forEach( choice => {
    choice.addEventListener("click", e => {
        if( !acceptingAnswers) return;

        acceptingAnswers = false;
        const selectedChoice = e.target;
        const selectedAnswer = selectedChoice.dataset["number"];

        const classToApply = selectedAnswer == currentQuestion.answer ? 'correct' : 'incorrect';

        if(classToApply === 'correct')
        {
            incrementScore(CORRECT_BONUS);
        }

        selectedChoice.parentElement.classList.add(classToApply);

        setTimeout( () => {
        selectedChoice.parentElement.classList.remove(classToApply);
            // console.log(classToApply);
            getNewQuestion();
        }, 1000);
    });
});

incrementScore = num => {
    score += num;
    scoreText.innerText = score;
};




















/**
 * Data sets
 * where you add custom data
 */