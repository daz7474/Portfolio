// ======================================
// Contact Form
// ======================================

// Get ref to input fields
const form = document.getElementById("contact-form");
const firstName = document.getElementById("contact-first-name");
const lastName = document.getElementById("contact-last-name");
const email = document.getElementById("contact-email");
const msg = document.getElementById("contact-msg");
const submitBtn = document.getElementById("contact-submit");

// Email validation
const emailRegex = new RegExp(/^[A-Za-z0-9_!#$%&'*+\/=?`{|}~^.-]+@[A-Za-z0-9.-]+$/, "gm");

// Store empty fields in array
let required = [];

// When submit button is clicked, check if fields have values
submitBtn.addEventListener("click", (e) => {

  // Check if first name is empty
  if (firstName.value === "" || firstName.value == null) {
    firstName.placeholder = "First name required";
    firstName.classList.add("required");
    required.push("First name required");
  }
  // Check if last name is empty
  if (lastName.value === "" || lastName.value == null) {
    lastName.placeholder = "Last name required";
    lastName.classList.add("required");
    required.push("Last name required");
  }
  // Check email validation
  if (!emailRegex.test(email.value)) {
    email.placeholder = "Email required";
    email.classList.add("required");
    required.push("Email required");
  }
  // Check if message is empty
  if (msg.value === "" || msg.value == null) {
    msg.placeholder = "Message required"
    msg.classList.add("required");
    required.push("Message required");
  }

  // Prevent default if required fields are empty
  if (required.length > 0) {
    e.preventDefault;
  }

  // Submit form
  form.submit();
});