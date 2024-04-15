<?php

$pdo = null;

try {
    $env = parse_ini_file("../.env");
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

header('Content-Type: application/json');

// Check if PDO is null
if ($pdo === null) {
    http_response_code(500);
    echo json_encode(['error' => 'Failed to connect to the database']);
    exit();
}

// Get form data
$firstName = isset($_POST['contact-first-name']) ? $_POST['contact-first-name'] : '';
$lastName = isset($_POST['contact-last-name']) ? $_POST['contact-last-name'] : '';
$email = isset($_POST['contact-email']) ? $_POST['contact-email'] : '';
$subject = isset($_POST['contact-subject']) ? $_POST['contact-subject'] : '';
$message = isset($_POST['contact-msg']) ? $_POST['contact-msg'] : '';

// Validation
$errors = [];
if (empty($firstName)) {
    $errors['contact-first-name'] = 'First name is required.';
}

if (empty($lastName)) {
  $errors['contact-last-name'] = 'Last name is required.';
}

if (empty($email)) {
    $errors['contact-email'] = 'Email is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['contact-email'] = 'Email is not valid.';
}

if (empty($message)) {
    $errors['message'] = 'Message is required.';
}

if (strlen($firstName) > 255) {
    $errors['contact-msg'] = 'First name is too long.';
}

if (strlen($lastName) > 255) {
  $errors['contact-msg'] = 'Last name is too long.';
}

if (strlen($email) > 255) {
    $errors['contact-email'] = 'Email is too long.';
}

if (strlen($message) > 1000) {
    $errors['contact-msg'] = 'Message is too long.';
}

if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['errors' => $errors]);
    exit();
}

// Sanitize inputs
$firstName = htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8');
$lastName = htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$subject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

// SQL execution
$sql = 'INSERT INTO portfolio_form (first_name, last_name, email, subject, message) VALUES (?, ?, ?, ?, ?)';
$stmt = $pdo->prepare($sql);
$stmt->execute([$firstName, $lastName, $email, $subject, $message]);
echo json_encode(['success' => 'Message sent successfully']);

// Email body
$to = "darren.lindsay@netmatters-scs.com";
$from = $email;
$mailBody = "Name: $firstName $lastName\nEmail: $email\nMessage: $message\n";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
$headers .= "From: <$from>";

// Send email
if (mail($to, $subject, $mailBody, $headers)) {
    echo json_encode(['success' => 'Message sent and email delivered successfully.']);
} else {
    echo json_encode(['error' => 'Message sent but email delivery failed.']);
}

?>