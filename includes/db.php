<?php

    $conn = oci_connect(
        "skillbridge",
        "skill123",
        "localhost:1522/XEPDB1"
    );

    if (!$conn) {
        $e = oci_error();
        echo "Database connection failed: " . $e['message'];
    }

?>