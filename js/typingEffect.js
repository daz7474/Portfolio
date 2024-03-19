// ======================================
// Typing Effect
// ======================================

// Get ref to title div
const typing = document.querySelector(".typing");

// Create initial title
let sentence = ["My Name Is Darren Lindsay"];

// If title already has text, overwrite sentence array
if (typing.textContent !== "") {
  // Store existing text in sentence
  sentence = [`${typing.textContent}`];
  // Remove existing text from HTML
  typing.textContent = "";
}

// Set index and typing speed
let letterIndex = 0;
let typeSpeed = 80;

const typeEffect = () => {
  if (letterIndex < sentence[0].length) {
    // Add each letter from sentence at current letterIndex
    typing.textContent += sentence[0][letterIndex];
    // Increment letterIndex to get next letter
    letterIndex++;
    setTimeout(typeEffect, typeSpeed);
  }
}

// Call typeEffect function
typeEffect();