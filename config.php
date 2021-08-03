﻿<?php

$conn = "";

try {
    $servername = "localhost:3307";
    $dbname = "db_login";
    $username = "root";
    $password = "";

    $conn = new PDO(
        "mysql:host=$servername; dbname=db_login",
        $username, $password
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo "Connection failed: "
        . $e->getMessage();
}

?>