<?php
session_start();
session_unset();
session_destroy();
header("Location: /skillbridge/html/login.php");
exit();
?>