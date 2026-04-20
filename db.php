<?php
$conn = mysqli_connect("localhost", "root", "", "skillbridge");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
