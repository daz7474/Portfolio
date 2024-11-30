<?php

require('db-con.php');

header('Content-Type: application/json');
$response = ['success' => 'Message sent'];
http_response_code(200);

try {
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
        $errors['contact-first-name'] = 'First name is too long.';
    }

    if (strlen($lastName) > 255) {
        $errors['contact-last-name'] = 'Last name is too long.';
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
    /** @var PDO $pdo */
    $sql = 'INSERT INTO portfolio_form (first_name, last_name, email, subject, message) VALUES (?, ?, ?, ?, ?)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$firstName, $lastName, $email, $subject, $message]);
} catch (PDOException $e) {
    error_log("SQL error: " . $e->getMessage());
    $response = ['error' => 'Database error: ' . $e->getMessage()];
    http_response_code(500);
} catch (Exception $e) {
    error_log("Error: " . $e->getMessage());
    $response = ['error' => $e->getMessage()];
    http_response_code($e->getCode() > 0 ? $e->getCode() : 500);
}

echo json_encode($response);
exit();
