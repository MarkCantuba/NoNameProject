<?php

require '../accountProcessing/dbconfig.php';
require '../queries/queries.php';
session_start();

$threadName = $_POST['ThreadName'];
$initialPost = $_POST['InitPost'];
$postedBy = getUserID($_SESSION['Username'], $conn);
$category = getCategoryID($_GET['category'], $conn);

addThread($threadName, $category, $postedBy, $initialPost, $conn);

header("location: ../membersOnly/threadsCategory.php?category=".$_GET['category']);