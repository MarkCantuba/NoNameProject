<?php

require_once '../queries/queries.php';

session_start();

if (isset($_POST['createCategory'])) {
    addCategory($_POST['CategoryName'], $_POST['Description'], $conn);
}

header("location: ../membersOnly/welcome.php");



