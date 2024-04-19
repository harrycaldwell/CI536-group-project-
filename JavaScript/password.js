
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
    const form = document.getElementById('quiz-form');
    const submitBtn = document.getElementById('submit-btn');
    const resultContainer = document.getElementById('result-container');

    submitBtn.addEventListener('click', function() {
        const answers = [];
        let score = 0;

        // Get selected answers
        for (let i = 1; i <= 10; i++) {
            const selectedOption = document.querySelector(`input[name="q${i}"]:checked`);
            if (selectedOption) {
                answers.push(selectedOption.value);
            }
        }

        // Calculate score
        answers.forEach(answer => {
            switch (answer) {
                case 'd':
                    score += 1;
                    break;
                default:
                    break;
            }
        });
  
        // Display result
        const totalScore = (score / 10) * 100;
        resultContainer.textContent = `Your final score is: ${totalScore}%`;
    });
});
