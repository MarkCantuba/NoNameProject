<?php

require_once '../queries/queries.php';
require_once '../accountProcessing/dbconfig.php';

if (isset($_GET['threadName'])) {
    $resultString = "";
    $statement = getThreadComments($_GET['threadName'], $conn);
    $statement->bind_result($PostContent, $CreatedOn, $Rating, $PostedBy);


    while ($statement->fetch()) {
        $poster = getUsernameFromId($PostedBy, $conn);

        $image = "\"https://api.adorable.io/avatars/40/".$PostedBy."@adorable.png\"";
        echo
        "<li class=\"media\">"
        . "<img rel=\"prefetch\" class=\"mr-3\" src=".$image."style=\"border-radius: 50%;\">"
        . " <div class=\"media-body\""
        . "         <h2> <strong>".$poster."</strong> </h2>"
        . "         <p>".$PostContent."</p>"
        . "</li>";
    }
}