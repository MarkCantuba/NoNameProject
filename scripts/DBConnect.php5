<?php
    $serverName = "localhost";
    $user       = "root";
    $password   = "potato";
    $database   = "finalproject";

    $conn = new mysqli($serverName, $user, $password, $database);

    if ($conn -> connect_error) {
        die("Connection Failed! " . $conn -> connect_error);
    }
