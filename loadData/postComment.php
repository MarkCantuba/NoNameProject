<?php

require_once '../queries/queries.php';
require_once '../accountProcessing/dbconfig.php';
require_once '../notifications/twilio.php';

session_start();
$poster = $_SESSION['Username'];
$threadName = $_GET['threadName'];

if (isset($_POST['postComment'])) {


    $postContent = $_POST['postComment'];
    $threadId = getThreadID($threadName, $conn);
    $postedBy = getUserID($poster, $conn);

    addPost($postContent, $threadId, $postedBy, $conn);
}

$threadId = getThreadID($threadName, $conn);

$subscribers = getSubscribersToThread($threadId, $conn);
$subscribers->bind_result($userId, $to);

while ($subscribers->fetch()) {
    $reciever = getUsernameFromId($userId, $conn);
    if ($reciever !== $poster) {
        $message = "Hi " . $reciever . ",\n\n"
                . $poster . " commented to '" . $threadName . "':\n\n"
                . $_POST['postComment'] . "\n\n"
                . "Sent by The Sketchy Web";

        sendSms($to, $message);
    }
}

header("location: ../membersOnly/threadsCategory.php?category=" . $_GET['category'] . "&threadName=" . $threadName);
