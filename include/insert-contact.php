<?php

require('../vendor/autoload.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');
$response = ['success' => 'Message sent'];
http_response_code(200);

try {
    // Load environment variables
    $env = parse_ini_file("../.env");
    $host = $env["DB_HOST"];
    $dbname = $env["DB_NAME"];
    $username = $env["DB_USERNAME"];
    $password = $env["DB_PASSWORD"];
    $smtp_host = $env["SMTP_HOST"];
    $smtp_port = $env["SMTP_PORT"];
    $smtp_user = $env["SMTP_USER"];
    $smtp_password = $env["SMTP_PASSWORD"];
    $smtp_secure = $env["SMTP_SECURE"];

    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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
        throw new Exception('Validation errors', 400);
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

    // Send email using PHPMailer
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = $smtp_host;
    $mail->SMTPAuth = true;
    $mail->Username = $smtp_user;
    $mail->Password = $smtp_password;
    $mail->SMTPSecure = $smtp_secure;
    $mail->Port = $smtp_port;
    
    //Recipients
    $mail->setFrom($email, $firstName);
    $mail->addAddress('daz7474@gmail.com', 'Darren Lindsay');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'New contact form submission';
    $mail->Body    = "Received a message from " . htmlspecialchars($firstName) . " " . htmlspecialchars($lastName) . " (" . htmlspecialchars($email) . "): <br><br>" . nl2br(htmlspecialchars($message));
    $mail->AltBody = "Received a message from " . htmlspecialchars($firstName) . " " . htmlspecialchars($lastName) . " (" . htmlspecialchars($email) . "):\n\n" . htmlspecialchars($message);

    $mail->send();
} catch (PDOException $e) {
    error_log("SQL error: " . $e->getMessage());
    $response = ['error' => 'Database error'];
    http_response_code(500);
} catch (Exception $e) {
    error_log("Error: " . $e->getMessage());
    $response = ['error' => $e->getMessage()];
    http_response_code($e->getCode() > 0 ? $e->getCode() : 500);
}

echo json_encode($response);
exit();

?>