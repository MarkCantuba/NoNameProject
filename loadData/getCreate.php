<?php
    require_once '../queries/queries.php';
    
    if (isset($_POST['createCategory'])) {
        addCategory($_POST['CategoryName'], $_POST['Description'], $conn);
    } 
    
    header("location: ../membersOnly/welcome.php");
    
    

