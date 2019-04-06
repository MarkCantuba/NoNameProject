<?php

require_once '../queries/queries.php';
require_once '../accountProcessing/dbconfig.php';

session_start();
$poster = $_SESSION['Username'];
$threadName = $_GET['threadName'];

if (isset($_POST['postComment'])) {


    $postContent = $_POST['postComment'];
    $threadId = getThreadID($threadName, $conn);
    $postedBy = getUserID($poster, $conn);

    addPost($postContent, $threadId, $postedBy, $conn);
}

header("location: ../membersOnly/threadsCategory.php?category=" . $_GET['category'] . "&threadName=" . $threadName);
