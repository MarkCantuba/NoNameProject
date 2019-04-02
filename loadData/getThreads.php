<?php

require_once '../accountProcessing/dbconfig.php';
include '../queries/queries.php';

$statement = getThreadsFromCategory($_GET['category'], $conn);

$statement->bind_result($threadId, $threadName, $postCount, $createdOn, $category, $postedBy);

while ($statement->fetch()) {
    echo convertToThreadBox($threadId, $threadName, $postCount, $createdOn, $postedBy, $conn);
}

function convertToThreadBox($threadId, $threadName, $postCount, $createdOn, $postedBy, $conn) {
    $link = "\"http://localhost:8080/membersOnly/threadsCategory.php?category=".$_GET['category']."&threadName=".$threadName."\"";
    $htmlString = "<div class=\"card text-center\">"
            . " <h4 class=\"card-header\"><a href=".$link.">".$threadName."</a></h3>"
            . " <div class=\"card-body\"> "
            . "   Post Count: " . $postCount
            . "<br> Posted By: " . getUsernameFromId($postedBy, $conn)
            . "<br> Thread Id: " . $threadId
            . " </div>"
            . " <div class=\"card-footer text-muted\">"
            . "Created on: " . $createdOn
            . " </div>"
            . "</div>";

    return $htmlString;
}

function getUsernameFromId($userId, $conn) {
    $query = "SELECT Username FROM Users WHERE userID = ?;";

    $statement = $conn->prepare($query);
    $statement->bind_param("i", $userId);

    $statement->execute();

    $statement->store_result();

    $statement->bind_result($id);
    $statement->fetch();

    return $id;
}
