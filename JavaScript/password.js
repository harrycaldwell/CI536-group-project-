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

document.addEventListener("DOMContentLoaded", function() {
  const questions = document.querySelectorAll('.question');
  const submitBtn = document.getElementById('submit-btn');
  const resultContainer = document.getElementById('result-container');
  let currentQuestionIndex = 0;
  let score = 0;

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

  // Function to calculate the result
  function calculateResult() {
      const totalQuestions = questions.length;
      let correctAnswers = 0;

      // Check each question for correct answer
      questions.forEach(question => {
          const selectedOption = question.querySelector(`input[name="${question.id}"]:checked`);
          if (selectedOption && selectedOption.value === question.dataset.correctAnswer) {
              correctAnswers++;
          }
      });

      // Calculate score percentage
      score = (correctAnswers / totalQuestions) * 100;

      // Display result
      resultContainer.textContent = `Your final score is: ${score}%`;
  }

  // Initially hide all questions except the first one
  for (let i = 1; i < questions.length; i++) {
      questions[i].style.display = 'none';
  }

  // Event listener for submit button
  submitBtn.addEventListener('click', function() {
      // Show next question or calculate result if it's the last question
      showNextQuestion();
  });
});

