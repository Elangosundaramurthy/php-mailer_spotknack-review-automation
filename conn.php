<?php
    // Check if the form has been submitted
    $conn = new mysqli('localhost:3308','root','','soptknack');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }