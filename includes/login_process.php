<?php

include("includes/db.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = :email";

$stid = oci_parse($conn, $sql);

oci_bind_by_name($stid, ":email", $email);

oci_execute($stid);

$user = oci_fetch_assoc($stid);

if($user && password_verify($password, $user['PASSWORD'])){

    session_start();
    $_SESSION['user_id'] = $user['ID'];

    echo "Login Successful";

}else{

    echo "Invalid Email or Password";

}

?>
