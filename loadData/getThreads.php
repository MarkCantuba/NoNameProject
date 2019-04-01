<?php
    require_once '../accountProcessing/dbconfig.php';
    include '../queries/queries.php';

    $statement = getThreadsFromCategory($_GET['category'], $conn);
    
    $statement -> bind_result($threadId, $threadName, $postCount, $createdOn, $category, $postedBy);
    
    while ($statement -> fetch()) {
        echo convertToThreadBox($threadId, $threadName, $postCount, $createdOn, $category, $postedBy);
    }
    
    function convertToThreadBox($threadId, $threadName, $postCount, $createdOn, $category, $postedBy) {
        $htmlString = 
                ""
                . "<div class=\"card text-center\">"
                . " <h4 class=\"card-header\">".$threadName."</h3>"
                . "</div>";
        
        return $htmlString;
    }
    
    
   
    
