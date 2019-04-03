<?php

//
require_once '../queries/queries.php';
require_once '../accountProcessing/dbconfig.php';

if (isset($_GET['threadName'])) {
    $resultString = "";
    $statement = getThreadComments($_GET['threadName'], $conn);
    $statement->bind_result($PostContent, $CreatedOn, $Rating, $PostedBy);


    while ($statement->fetch()) {
        $poster = getUsernameFromId($postedBy, $conn);
        echo
        "<div class=\"media\">"
        . "<img rel=\"prefetch\" class=\"mr-3\" src=\"http://lorempixel.com/50/50/animals\"/ style=\"border-radius: 50%;\">"
        . " <div class=\"media-body\""
        . "         <h2> <strong>".$poster."</strong> </h2>"
        . "         <p>".$PostContent."</p>"
        . " </div>"
        . ""
        . "</div>";
    }
}