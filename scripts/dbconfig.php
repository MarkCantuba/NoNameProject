<?php

    define('Host', "localhost");
    define('Username', "root");
    define('Password', "potato");
    define('DBName', "finalproject");
    
    $conn = new mysqli(Host, Username, Password, DBName);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

            