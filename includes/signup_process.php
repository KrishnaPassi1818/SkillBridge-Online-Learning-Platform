<?php

include("includes/db.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name, email, password)
        VALUES (:name, :email, :password)";

$stid = oci_parse($conn, $sql);

oci_bind_by_name($stid, ":name", $name);
oci_bind_by_name($stid, ":email", $email);
oci_bind_by_name($stid, ":password", $password);

$r = oci_execute($stid);

if($r){
    echo "Signup Successful";
}else{
    echo "Signup Failed";
}

?>