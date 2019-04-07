<?php
require_once '../accountProcessing/dbconfig.php';
require_once '../queries/queries.php';

session_start();

$threadID = getThreadID($_GET['thread'], $conn);
$phoneNumber = $_POST['PhoneNumber'];
$userId = getUserID($_SESSION['Username'], $conn);

if (!subscribeToThread($threadID, $userId, $phoneNumber, $conn)) {
    header("location: ../membersOnly/threadsCategory.php?category=".$_GET['category']."&result=fail&thread=".$_GET['thread']);
} else {
    header("location: ../membersOnly/threadsCategory.php?category=".$_GET['category']."&result=success");
}