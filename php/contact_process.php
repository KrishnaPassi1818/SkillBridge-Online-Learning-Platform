<?php
    require_once("../config/db.php");

    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        header("Location: /skillbridge/html/contact.php");
        exit();
    }

    $firstName = trim($_POST["first_name"] ?? "");
    $lastName  = trim($_POST["last_name"] ?? "");
    $email     = trim($_POST["email"] ?? "");
    $phone     = trim($_POST["phone"] ?? "");
    $subject   = trim($_POST["subject"] ?? "");
    $message   = trim($_POST["message"] ?? "");

    if ($firstName === "" || $lastName === "" || $email === "" || $phone === "" || $subject === "" || $message === "") {
        header("Location: /skillbridge/html/contact.php?error=empty_fields");
        exit();
    }

    $stmt = $conn->prepare("INSERT INTO contact_messages (first_name, last_name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $firstName, $lastName, $email, $phone, $subject, $message);

    if ($stmt->execute()) {
        header("Location: /skillbridge/html/contact.php?success=1");
        exit();
    } else {
        header("Location: /skillbridge/html/contact.php?error=save_failed");
        exit();
}