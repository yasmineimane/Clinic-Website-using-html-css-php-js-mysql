<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbname = "clinic";

    $conn = new mysqli($serverName, $userName, $password, $dbname);

    if ($conn->connect_error) {
        die("connection error". $conn->connect_error);
    }
