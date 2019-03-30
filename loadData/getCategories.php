<?php

    require_once '../accountProcessing/dbconfig.php';
    
    $query = "SELECT CategoryID, CategoryName, Description FROM Category;";
    
    $result = mysqli_query($conn, $query);
    
    while ($row = mysqli_fetch_array($result)) {
        echo convertToTable($row['CategoryID'], $row['CategoryName'], $row['Description']);
    }
