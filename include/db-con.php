<?php

$pdo = null;

try {
    $env = parse_ini_file(__DIR__ . "/../.env");
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
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    error_log("Connection error: " . $e->getMessage());
}
