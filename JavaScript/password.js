function generatePassword() {
    const length = 16; // Length of the generated password
    const uppercaseChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    const lowercaseChars = "abcdefghijklmnopqrstuvwxyz";
    const numbers = "0123456789";
    const specialChars = "!@#$%^&*()_+-=[]{}|;:,.<>?/~";
    let password = "";

    // Ensure at least one uppercase letter, one lowercase letter, one number, and one special character
    password += uppercaseChars[Math.floor(Math.random() * uppercaseChars.length)];
    password += lowercaseChars[Math.floor(Math.random() * lowercaseChars.length)];
    password += numbers[Math.floor(Math.random() * numbers.length)];
    password += specialChars[Math.floor(Math.random() * specialChars.length)];

    // Generate remaining characters
    for (let i = 4; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * (uppercaseChars.length + lowercaseChars.length + numbers.length + specialChars.length));
        if (randomIndex < uppercaseChars.length) {
            password += uppercaseChars[randomIndex];
        } else if (randomIndex < uppercaseChars.length + lowercaseChars.length) {
            password += lowercaseChars[randomIndex - uppercaseChars.length];
        } else if (randomIndex < uppercaseChars.length + lowercaseChars.length + numbers.length) {
            password += numbers[randomIndex - uppercaseChars.length - lowercaseChars.length];
        } else {
            password += specialChars[randomIndex - uppercaseChars.length - lowercaseChars.length - numbers.length];
        }
    }

    // Break password into four sections with a "-"
    password = password.match(/.{1,4}/g).join('-');

    document.getElementById("password").value = password;


}


    document.addEventListener("DOMContentLoaded", function () {
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
            q1: "d",
            q2: "c",
            q3: "c",
            q4: "c",
            q5: "c",
            q6: "b",
            q7: "d",
            q8: "a",
            q9: "a",
            q10: "b"
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
            const scriptName = "password.js"; //This will be changed based on what script it is in

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
