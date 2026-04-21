<?php
require_once("../config/db.php");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: /skillbridge/html/signup.php");
    exit();
}

$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$password = $_POST["password"] ?? "";

if ($name === "" || $email === "" || $password === "") {
    header("Location: /skillbridge/html/signup.php?error=empty_fields");
    exit();
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $hashedPassword);

try {
    $stmt->execute();
    header("Location: /skillbridge/html/login.php?success=signed_up");
    exit();
} catch (mysqli_sql_exception $e) {
    if ($e->getCode() == 1062) {
        header("Location: /skillbridge/html/signup.php?error=email_exists");
        exit();
    } else {
        header("Location: /skillbridge/html/signup.php?error=server_error");
        exit();
    }
}