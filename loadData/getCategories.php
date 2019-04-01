<?php

    require_once '../accountProcessing/dbconfig.php';
    
    $query = "SELECT CategoryID, CategoryName, Description FROM Category;";
    
    $result = mysqli_query($conn, $query);
    
    while ($row = mysqli_fetch_array($result)) {
        echo convertToCategoryTable($row['CategoryID'], $row['CategoryName'], $row['Description']);
    }

                
    function convertToCategoryTable($id, $name, $description) {
        return "<tr><th class=\"font-weight-bold\">".$id."</th><th><a "
                . "href=\"../membersOnly/threadsCategory.php?category=".$name
                ."\">".$name."</a></th><th>".$description."</th></tr>";
    }
    