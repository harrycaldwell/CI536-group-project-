document.addEventListener("DOMContentLoaded", function () {
    // Add event listener to the form on DOMContentLoaded

    const questions = document.querySelectorAll('.question');
        const submitBtn = document.getElementById('submit-btn');
        const quizForm = document.getElementById('quiz-form');

        let currentQuestionIndex = 0;

        // Function to show the next question
        function showNextQuestion() {
            if (currentQuestionIndex < questions.length - 1) {
                questions[currentQuestionIndex].style.display = 'none';
                currentQuestionIndex++;
                questions[currentQuestionIndex].style.display = 'block';
            } else {
                submitBtn.textContent = 'Finish';
                calculateResult();
            }
        }

        // Initially hide all questions except the first one
        for (let i = 1; i < questions.length; i++) {
            questions[i].style.display = 'none';
        }

        // Event listener for submit button
        submitBtn.addEventListener('click', function () {
            // Show next question or calculate result if it's the last question
            showNextQuestion();
        });

        // Event listener for form submission
        quizForm.addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent form submission from refreshing the page
            calculateResult(); // Calculate result when form is submitted
        });
    // Define correct answers
    const correctAnswers = {
        q1: "c",
        q2: "c",
        q3: "c",
        q4: "a",
        q5: "b",
        q6: "b",
        q7: "b",
        q8: "b",
        q9: "d",
        q10: "c"
    };
// Function to calculate result and call functions to update
function calculateResult() {
    let score = 0;

    // Loop through each question
    for (let i = 1; i <= Object.keys(correctAnswers).length; i++) {
        const questionName = "q" + i;
        const selectedAnswer = document.querySelector("input[name='" + questionName + "']:checked");

        // Check if answer is selected for each question
        if (selectedAnswer) {
            // Check if selected answer is correct
            if (selectedAnswer.value === correctAnswers[questionName]) {
                score++;
            }
        }
    }
    //update screen
    displayScore(score);

    //This section is what connects to the PHP file
    const scriptName = "SocialE.js"; //This will be changed based on what script it is in

    // Call the sendScore function with the score and scriptName
    sendScore(score, scriptName);
        
}

function displayScore(score) {
    // Display result   
    const resultContainer = document.getElementById("result");
    resultContainer.innerHTML = "Your score: " + score + " out of " + Object.keys(correctAnswers).length;
}
// Define the sendScore function outside of the event listener
function sendScore(score, scriptName) {
    // Create the URL with the score and scriptName as query parameters
    const url = './QuizScore.php?score=' + encodeURIComponent(score) + '&scriptName=' + encodeURIComponent(scriptName);

    fetch(url, {
        method: 'GET',
    })
    .then(response => {
        if (response.ok) {
            console.log('Score submitted successfully:' + score);
        } else {
            console.error('Failed to submit score.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
});
