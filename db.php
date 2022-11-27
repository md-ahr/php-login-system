<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "daily_notes";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "done";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
