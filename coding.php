<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/1f2dc43538.js" crossorigin="anonymous"></script>
  <title>Darren Lindsay Portfolio</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/styles/atom-one-dark.min.css">
  <link rel="stylesheet" href="js/slick/slick.css">
  <link rel="stylesheet" href="js/slick/slick-theme.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body id="body">

  <div class="grid">

    <!-- Top Nav -->

    <?php @include("include/mobile-menu.php"); ?>

    <!-- Header -->

    <header class="grid-item alt">
      <video class="header-vid" src="img/aurora-borealis.mp4" autoplay loop muted></video>
      <div class="heading">
        <h1 class="typing title-heading">Coding Examples</h1>
      </div>
    </header>

    <!-- Side Nav -->

    <?php @include("include/side-nav.php"); ?>

    <!-- Main -->

    <main id="main">

      <!-- JavaScript Code -->

      <div class="container">

        <div class="title-heading">
          <h2><span class="icon-javascript"></span> <span class="text-secondary">Code</span></h2>
        </div>

        <div class="code-container">
          <div class="slides">

            <!-- Mobile Menu Code -->
            <div class="code-item">
              <pre class="code-background">
              <code class="code-snippet">
// Get ref to burger menu button
const menuBtn = document.querySelector(".hamburger");
const mobileMenu = document.querySelector(".mobile-menu");
const burgerBar = document.querySelector(".bar");
const menulink = document.querySelectorAll(".mobile-menu div a");

// On click, toggles class "toggle" to mobile menu to show/hide
menuBtn.addEventListener("click", () => {
  mobileMenu.classList.toggle("menu-active");
  // Toggles the class "x" to add/remove a cross
  setTimeout(() => {
    burgerBar.classList.toggle("rotate");
  }, 100)
});

// Hides menu when each link is clicked
for (let i = 0; i < menulink.length; i++) {
  menulink[i].addEventListener("click", () => {
    mobileMenu.classList.toggle("menu-active");
    // Toggles the class "x" to add/remove a cross
    setTimeout(() => {
      burgerBar.classList.remove("rotate");
    }, 150)
  })
};
              </code>
            </pre>
              <div class="code-content">
                <h3 class="code-h3">
                  Mobile Menu
                </h3>
                <p class="code-p">
                  This is code for the mobile menu. Here I am declaring variables to get a reference to the button,
                  menu,
                  menu links and the bar icons.
                  <br>
                  I created an event listener for when the menu button is clicked and toggle a CSS class of
                  "menu-active"
                  which changes "display: none;" to "display: flex;"
                  <br>
                  Then I have created a loop to iterate over all the menu links to create another event listener for
                  when
                  a
                  link
                  is clicked. This then toggles the CSS class again to make sure the menu closes if a link is clicked.
                </p>
              </div>
            </div>


            <!-- Typing Effect Code -->
            <div class="code-item">
              <pre class="code-background">
              <code class="code-snippet">
// Get ref to title div
const typing = document.querySelector(".typing");

// Create initial title
let sentence = ["Darren Lindsay"];

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
              </code>
            </pre>
              <div class="code-content">
                <h3 class="code-h3">
                  Typing Effect
                </h3>
                <p class="code-p">
                  This code is for the typing effect on the banner. First I declared a variable that gets a reference to
                  the titles div element and created another which stores the sentence to use in an array.
                  <br>
                  First I am checking if the div element already has a title. If so, then I'm store the existing title
                  into
                  the "sentence" variable and clearing what is in the HTML.
                  <br>
                  Before creating a function, I'm setting the letter index to 0 and speed of the typing effect.
                </p>
              </div>
            </div>

            <!-- Form Validation Code -->
            <div class="code-item">
              <pre class="code-background">
              <code class="code-snippet">
// Get ref to input fields
const form = document.getElementById("contact-form");
const firstName = document.getElementById("contact-first-name");
const lastName = document.getElementById("contact-last-name");
const email = document.getElementById("contact-email");
const msg = document.getElementById("contact-msg");
const submitBtn = document.getElementById("contact-submit");

// Email validation
let emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

// When submit button is clicked, check if fields have values
submitBtn.addEventListener("click", (e) => {

  // Store empty fields in array
  let required = [];

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
    return false;
  }

  // Submit form
  form.submit();
});
              </code>
            </pre>
              <div class="code-content">
                <h3 class="code-h3">
                  Form Validation
                </h3>
                <p class="code-p">
                  Code for the contact form validation. I'm getting a reference to each input field and the submit
                  button.
                  I created a variable to check the email field by testing it with the regex.
                  <br>
                  An event listener for when the form button is clicked, checks each input field for any empty values.
                  This will add a CSS class to highlight each empty field and add a string to the array variable
                  "required".
                  <br>
                  If the "required" variable has any value, preventDefault stops the form from being submitted.
                </p>
              </div>
            </div>

          </div>

        </div>
      </div>

      <!-- PHP Code -->

      <div class="container">

        <div class="title-heading">
          <h2><span class="icon-php"></span> <span class="text-secondary">Code</span></h2>
        </div>

        <div class="code-container">
          <div class="slides">

            <!-- Database Connection Code -->
            <div class="code-item">
              <pre class="code-background">
              <code class="code-snippet">
$pdo = null;

try {
    $env = parse_ini_file(".env");
    $host = $env["DB_HOST"];
    $dbname = $env["DB_NAME"];
    $username = $env["DB_USERNAME"];
    $password = $env["DB_PASSWORD"];

    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    error_log("Connection error: " . $e->getMessage());
}
              </code>
            </pre>
              <div class="code-content">
                <h3 class="code-h3">
                  Database Connection
                </h3>
                <p class="code-p">
                  This code is used to connect to a database using PHP's PDO, which provides a way to access a database.
                  Inside the try block, variables are set from an .env file and are used in a new instance of the PDO
                  class. This instance is responsible for handling the connection to the database.
                  <br>
                  If any errors occurred, it is caught by the catch block and an error message is logged.
                </p>
              </div>
            </div>


            <!-- Contact Form Code -->
            <div class="code-item">
              <pre class="code-background">
              <code class="code-snippet">
header('Content-Type: application/json');

// Check if PDO is null
if ($pdo === null) {
  http_response_code(500);
  echo json_encode(['error' => 'Failed to connect to the database']);
  exit();
}

// Get form data
$name = isset($_POST['contact-name']) ? $_POST['contact-name'] : '';
$company = isset($_POST['company']) ? $_POST['company'] : '';
$email = isset($_POST['contact-email']) ? $_POST['contact-email'] : '';
$telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

// Validation
$errors = [];
if (empty($name)) {
  $errors['contact-name'] = 'Name is required.';
}

if (empty($email)) {
  $errors['contact-email'] = 'Email is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors['contact-email'] = 'Email is not valid.';
}

if (empty($telephone)) {
  $errors['telephone'] = 'Telephone is required.';
}

if (empty($message)) {
  $errors['message'] = 'Message is required.';
}

if (strlen($name) > 255) {
  $errors['contact-name'] = 'Name is too long.';
}

if (strlen($email) > 255) {
  $errors['contact-email'] = 'Email is too long.';
}

if (strlen($company) > 255) {
  $errors['company'] = 'Company name is too long.';
}

if (!ctype_digit($telephone) || strlen($telephone) != 11) {
  $errors['telephone'] = 'Phone number is invalid.';
}

if (strlen($message) > 1000) {
  $errors['message'] = 'Message is too long.';
}

if (!empty($errors)) {
  http_response_code(400);
  echo json_encode(['errors' => $errors]);
  exit();
}

// Sanitize inputs
$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$company = htmlspecialchars($company, ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$telephone = htmlspecialchars($telephone, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

// SQL execution
try {
  $sql = "INSERT INTO contact_form (name, email, company_name, phone, message) VALUES (?, ?, ?, ?, ?)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$name, $email, $company, $telephone, $message]);
  echo json_encode(['success' => 'Message sent successfully']);
} catch (PDOException $e) {
  error_log("SQL error: " . $e->getMessage());
  echo json_encode(['error' => 'Failed to insert data into the database']);
exit();
}
              </code>
            </pre>
              <div class="code-content">
                <h3 class="code-h3">
                  Contact Form Submission
                </h3>
                <p class="code-p">
                  Code responsible for handling the contact form submission. Variables are set from user input but is
                  first sanitized with PHP's htmlspecialchars. The code checks if the required fields are empty and if the length is too long. It also validates the email
                  format and ensures the phone number only contains numbers.
                  <br>
                  If all validations are passed, a SQL query inserts the sanitized form data into a contact form table using a prepared statement.
                </p>
              </div>
            </div>

            <!-- Retrieve Database Code -->
            <div class="code-item">
              <pre class="code-background">
              <code class="code-snippet">
function getNews($pdo)
{
  try {
    $sql = $pdo->query("SELECT * FROM news");
    return $sql->fetchAll();
  } catch (PDOException $e) {
    echo "Database query failed: " . htmlspecialchars($e->getMessage());
    exit;
  }
}

if ($pdo instanceof PDO) {
  foreach (getNews($pdo) as $news) {
      echo newsContent(
          $news["image"],
          $news["image_alt"],
          $news["title"],
          $news["read_time"],
          $news["info"],
          $news["button"],
          $news['type'],
          $news["author_image"],
          $news["author_name"],
          $news["date"],
          $news["counter"]
      );
  }
} else {
  echo "Failed to get news items.";
}
              </code>
            </pre>
              <div class="code-content">
                <h3 class="code-h3">
                  Retrieve Database Data
                </h3>
                <p class="code-p">
                  This PHP code is to retrieve news items from a database and then display them.
                  The getNews() function queries the database for all entries in the news table.
                  <br>
                  If the $pdo variable is a valid PDO object, it calls the getNews() function to get all news items and
                  loops through each item using a foreach loop. Each item calls a newsContent() function which sets the
                  HTML structure to display the item.
                </p>
              </div>
            </div>

          </div>

        </div>
      </div>

    </main>

    <!-- Footer -->

    <footer>
      <div class="back-to-top">
        <a class="text-light" href="#body">
          <i class="icon fa-solid fa-arrow-up"></i>
          Back To Top
        </a>
      </div>
    </footer>

  </div>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/highlight.min.js"></script>
  <script src="js/sticky/sticky.js"></script>
  <script src="js/slick/slick.min.js"></script>
  <script src="js/fslightbox.js"></script>
  <script src="js/mobileMenu.js"></script>
  <script src="js/typingEffect.js"></script>
  <script src="js/carousel.js"></script>
  <script>hljs.highlightAll();</script>

</body>

</html>