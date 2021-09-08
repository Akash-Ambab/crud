<?php

    $conn = new mysqli("localhost", "test", "test123", "crud");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>