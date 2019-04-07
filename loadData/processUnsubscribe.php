<?php
require_once '../accountProcessing/dbconfig.php';
require_once '../queries/queries.php';

session_start();

$userId = getUserID($_SESSION['Username'], $conn);
$threadId = getThreadID($_GET['thread'], $conn);

unsubscribeFromThread($threadId, $userId, $conn);

header("location: ../membersOnly/threadsCategory.php?category=".$_GET['category']);