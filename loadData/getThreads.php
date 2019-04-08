<?php

require_once '../accountProcessing/dbconfig.php';
include '../queries/queries.php';

$statement = getThreadsFromCategory($_GET['category'], $conn);

$statement->bind_result($threadId, $threadName, $postCount, $createdOn, $category, $postedBy);

while ($statement->fetch()) {
    echo convertToThreadBox($threadId, $threadName, $postCount, $createdOn, $postedBy, $conn);
}

function convertToThreadBox($threadId, $threadName, $postCount, $createdOn, $postedBy, $conn) {
    $link = "\"../membersOnly/threadsCategory.php?category=".$_GET['category']."&threadName=".$threadName."\"";
    $subscribed;

    $userID = getUserID($_SESSION['Username'], $conn);



    if (isSubscribeToThread($userID, $threadId, $conn) == false) {
        $subLink = "\"../membersOnly/threadsCategory.php?category=".$_GET['category']."&thread=".$threadName."\"";
        $subscribed = "<br> <a href=".$subLink."> Subscribe </a>";
    } else {
        $unsubLink = "\"../membersOnly/threadsCategory.php?category=".$_GET['category']."&threadUnsub=".$threadName."\"";

        $subscribed = "<br> <a href=".$unsubLink."> Unsubscribe </a>";
    }
    $htmlString = "<div class=\"card text-center\" id=\"".str_replace(' ', '', $threadName)."\">"
            . " <h4 class=\"card-header\"><a href=".$link.">".$threadName."</a></h3>"
            . " <div class=\"card-body\"> "
            . "   Post Count: " . $postCount
            . "<br> Posted By: " . getUsernameFromId($postedBy, $conn)
            . "<br> Thread Id: " . $threadId
            . $subscribed
            . " </div>"
            . " <div class=\"card-footer text-muted\">"
            . "Created on: " . $createdOn
            . " </div>"
            . "</div>";

    return $htmlString;
}
