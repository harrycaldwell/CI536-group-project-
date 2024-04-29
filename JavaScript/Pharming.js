document.addEventListener("DOMContentLoaded", function () {
    // Add event listener to the form on DOMContentLoaded
    document.getElementById("quizForm").addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent form submission from refreshing the page

        // Define correct answers
        const correctAnswers = {
            q1: "C",
            q2: "B",
            q3: "B",
            q4: "A",
            q5: "B",
            q6: "A",
            q7: "B",
            q8: "C",
            q9: "B",
            q10: "C"
        };

        // Initialize score
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

        // Display result
        const resultContainer = document.getElementById("result");
        resultContainer.innerHTML = "Your score: " + score + " out of " + Object.keys(correctAnswers).length;

        if (score == 10) {
            //DO SOMETHING TO DATABASE
        }
    });
});
