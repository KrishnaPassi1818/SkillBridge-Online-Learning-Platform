<?php

include("includes/db.php");

$name = $_POST['firstname'] . " " . $_POST['lastname'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO contacts (name, email, message)
        VALUES (:name, :email, :message)";

$stid = oci_parse($conn, $sql);

oci_bind_by_name($stid, ":name", $name);
oci_bind_by_name($stid, ":email", $email);
oci_bind_by_name($stid, ":message", $message);

$r = oci_execute($stid);

if($r){
    echo "Message Sent Successfully";
}else{
    echo "Error sending message";
}

?>