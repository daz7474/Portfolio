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
$firstName = filter_input(INPUT_POST, 'contact-first-name', FILTER_SANITIZE_STRING);
$lastName = filter_input(INPUT_POST, 'contact-last-name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'contact-email', FILTER_SANITIZE_EMAIL);
$subject = filter_input(INPUT_POST, 'contact-subject', FILTER_SANITIZE_STRING);
$message = filter_input(INPUT_POST, 'contact-msg', FILTER_SANITIZE_STRING);

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

// SQL execution
$sql = "INSERT INTO contact_form (first_name, last_name, email, subject, message) VALUES (?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$firstName, $lastName, $email, $subject, $message]);
echo json_encode(['success' => 'Message sent successfully']);

?>