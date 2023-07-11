const username = document.getElementById("username");
const saveScoreBtn = document.getElementById("saveScoreBtn");
const mostRecentScore = localStorage.getItem("mostRecentScore");
const highScores = JSON.parse(localStorage.getItem("highScores")) || [];

const MAX_HIGH_SCORES = 5;

// Setting the score in label
finalScore.innerText = mostRecentScore;

username.addEventListener("keyup", () => {
    saveScoreBtn.disabled = !username.value;
});

savingHighScore = e => {
    console.log("click the save button");
    e.preventDefault();

    const score = {
        // score: Math.floor(Math.random() * 100),
        score: mostRecentScore,
        name: username.value
    }

    // Sorting ang pushing to local storage
    highScores.push(score);
    highScores.sort((a, b) => b.score - a.score);
    highScores.splice(MAX_HIGH_SCORES);

    localStorage.setItem("highScores", JSON.stringify(highScores));

    window.location.assign("index.html");

};




/**
 * Local storage
 * use key value pairs
 */