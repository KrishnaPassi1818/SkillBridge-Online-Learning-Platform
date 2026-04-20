<?php
session_start();
require_once "../db.php";

$full_name = trim($_POST['full_name']);
$email     = trim($_POST['email']);
$password  = $_POST['password'];

// Check duplicate email
$check = mysqli_prepare($conn, "SELECT id FROM users WHERE email = ? LIMIT 1");
mysqli_stmt_bind_param($check, "s", $email);
mysqli_stmt_execute($check);
mysqli_stmt_store_result($check);

if (mysqli_stmt_num_rows($check) > 0) {
    $_SESSION['signup_error'] = "Email already registered.";
    header("Location: signup.php");
    exit();
}

// Insert user
$hashed = password_hash($password, PASSWORD_BCRYPT);
$stmt   = mysqli_prepare($conn, "INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)");
mysqli_stmt_bind_param($stmt, "sss", $full_name, $email, $hashed);

if (mysqli_stmt_execute($stmt)) {
    header("Location: login.php");
    exit();
} else {
    $_SESSION['signup_error'] = "Registration failed. Try again.";
    header("Location: signup.php");
    exit();
}
?>
