<?php
    require_once '../accountProcessing/dbconfig.php';
    
    function addCategory($categoryName, $description, $conn) {
        $query = "INSERT INTO Category (CategoryName, Description) VALUES (?,?);";
       
        $statement = $conn -> prepare($query);
        $statement->bind_param("ss", $categoryName, $description);
        
        $statement -> execute();
    }
    
    function addPost($postContent, $threadId, $postedBy, $conn) {
        $query = "INSERT INTO Post (PostContent, ThreadID, PostedBy) VALUES (?,?,?);";
        $statement = $conn -> prepare($query);
        $statement -> bind_param("sii", $postContent, $threadId, $postedBy);
        
        $statement -> execute();
    }
    
    function addThread($threadName, $category, $postedBy, $postContent, $conn) {
        $query = "INSERT INTO Thread (ThreadName, Category, PostedBy) VALUES (?,?,?);";
        $statement = $conn -> prepare($query);
        $statement -> bind_param("sii", $threadName, $category, $postedBy);
        
        $statement -> execute();
        
        $id = getThreadID($threadName, $conn);
        
        addPost($postContent, $id, $postedBy, $conn);
        incrementPostCount($id, $conn);
        
    }
    
    function incrementPostCount($threadID, $conn, $incrementBy=1) {
        $query = "UPDATE thread SET PostCount = PostCount + ? WHERE ThreadID = ?;";
        $statement = $conn -> prepare($query);
        
        $statement -> bind_param("is", $incrementBy, $threadID);
        
        $statement -> execute();
    }
    
    function getThreadID($threadName, $conn) {
        $query = "SELECT ThreadID FROM Thread WHERE ThreadName LIKE ?;";
        
        $statement = $conn -> prepare($query);
        $statement -> bind_param("s", $threadName);
        
        $statement -> execute();
        
        $statement -> store_result();
        
        $statement -> bind_result($id);
        $statement -> fetch();
        
        return $id;
    }
    
    