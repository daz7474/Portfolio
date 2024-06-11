// ======================================
// Typing Effect
// ======================================

// Get ref to title div
const typing = document.querySelector(".typing");

// Initialize sentences array
let sentences = [];

// Check if the title div is empty
if (typing.textContent.trim() === "") {
  // If empty, set sentences to "Darren Lindsay" and "Web Developer"
  sentences = ["Darren Lindsay", "Web Developer"];
} else {
  // Otherwise, set sentences to the current text
  sentences = [typing.textContent.trim()];
}

// Remove the existing text from HTML
typing.textContent = "";

// Set initial index values
let sentenceIndex = 0;
let letterIndex = 0;
let typeSpeed = 80;
let deleteSpeed = 50;
let delayBetweenSentences = 1000; // 1 second delay between sentences

// Function to handle typing effect
const typeEffect = () => {
  if (letterIndex < sentences[sentenceIndex].length) {
    typing.textContent += sentences[sentenceIndex][letterIndex];
    letterIndex++;
    setTimeout(typeEffect, typeSpeed);
  } else {
    if (sentenceIndex === 0 && sentences.length > 1) {
      // Only proceed to delete effect if there's a second sentence to type
      setTimeout(deleteEffect, delayBetweenSentences);
    }
  }
}

// Function to handle deleting effect
const deleteEffect = () => {
  if (letterIndex > 0) {
    typing.textContent = sentences[sentenceIndex].substring(0, letterIndex - 1);
    letterIndex--;
    setTimeout(deleteEffect, deleteSpeed);
  } else {
    sentenceIndex++;
    setTimeout(typeEffect, delayBetweenSentences);
  }
}

// Start the typing effect
typeEffect();
