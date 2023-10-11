// Generate a random number between min and max (inclusive)
function getRandomNumber(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

// Initialize the game
const targetNumber = getRandomNumber(1, 100);
let attempts = 0;

// Function to check the player's guess
function checkGuess() {
  const guessInput = document.getElementById('guessInput');
  const message = document.getElementById('message');

  // Get the player's guess
  const playerGuess = parseInt(guessInput.value);

  // Validate the input
  if (isNaN(playerGuess) || playerGuess < 1 || playerGuess > 100) {
      message.textContent = 'Please enter a valid number between 1 and 100.';
      return;
  }

  // Increment the attempts
  attempts++;

  // Check if the guess is correct
  if (playerGuess === targetNumber) {
      message.textContent = `Congratulations! You guessed the number ${targetNumber} in ${attempts} attempts.`;
      message.style.color = 'green';
      guessInput.disabled = true;
  } else {
      // Provide a hint
      message.textContent = playerGuess < targetNumber ? 'Try a higher number.' : 'Try a lower number.';
      message.style.color = 'red';
  }
}


