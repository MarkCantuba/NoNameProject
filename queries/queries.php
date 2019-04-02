<?php

require_once '../accountProcessing/dbconfig.php';

function addCategory($categoryName, $description, $conn) {
    $query = "INSERT INTO Category (CategoryName, Description) VALUES (?,?);";

    $statement = $conn->prepare($query);
    $statement->bind_param("ss", $categoryName, $description);

    $statement->execute();
}

function addPost($postContent, $threadId, $postedBy, $conn) {
    $query = "INSERT INTO Post (PostContent, ThreadID, PostedBy) VALUES (?,?,?);";
    $statement = $conn->prepare($query);
    $statement->bind_param("sii", $postContent, $threadId, $postedBy);

    $statement->execute();
}

function addThread($threadName, $category, $postedBy, $postContent, $conn) {
    $query = "INSERT INTO Thread (ThreadName, Category, PostedBy) VALUES (?,?,?);";
    $statement = $conn->prepare($query);
    $statement->bind_param("sii", $threadName, $category, $postedBy);

    $statement->execute();

    $id = getThreadID($threadName, $conn);

    addPost($postContent, $id, $postedBy, $conn);
    incrementPostCount($id, $conn);
}

function incrementPostCount($threadID, $conn, $incrementBy = 1) {
    $query = "UPDATE thread SET PostCount = PostCount + ? WHERE ThreadID = ?;";
    $statement = $conn->prepare($query);

    $statement->bind_param("is", $incrementBy, $threadID);

    $statement->execute();
}

function getThreadsFromCategory($categoryName, $conn) {
    $query = "SELECT * FROM Thread WHERE Category = ?;";
    $categoryId = getCategoryID($categoryName, $conn);

    $statement = $conn->prepare($query);
    $statement->bind_param("i", $categoryId);

    $statement->execute();
    $statement->store_result();

    return $statement;
}

function getThreadID($threadName, $conn) {
    $query = "SELECT ThreadID FROM Thread WHERE ThreadName LIKE ?;";

    $statement = $conn->prepare($query);
    $statement->bind_param("s", $threadName);

    $statement->execute();

    $statement->store_result();

    $statement->bind_result($id);
    $statement->fetch();

    return $id;
}

function getCategoryID($categoryName, $conn) {
    $query = "SELECT CategoryID FROM Category WHERE categoryName LIKE ?;";

    $statement = $conn->prepare($query);
    $statement->bind_param("s", $categoryName);

    $statement->execute();

    $statement->store_result();

    $statement->bind_result($id);
    $statement->fetch();

    return $id;
}

function getUserID($name, $conn) {
    $query = "SELECT UserID FROM Users WHERE Username LIKE ?;";

    $statement = $conn->prepare($query);
    $statement->bind_param("s", $name);

    $statement->execute();

    $statement->store_result();

    $statement->bind_result($id);
    $statement->fetch();

    return $id;
}
