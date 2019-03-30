<!--
Variables:
    rUsername
    rPassword
    rCPassword
    rEmail
 
-->

<?php
    require_once './dbconfig.php';
    
    if (isset($_POST['rSubmit'])) {
        
        $username = $_POST['rUsername'];
        $email = $_POST['rEmail'];    
        $password = $_POST['rPassword'];
        $cpassword = $_POST['rCPassword'];

        if ($password !== $cpassword) {
            header("location: ../index.php?error=notMatch&username=".$username."&email=".$email);
            exit();
        } else if (strlen($password) <= 8) {
            header("location: ../index.php?error=passwordTooShort&username=".$username."&email=".$email);
            exit();
        }
        
        else {
            $salt = uniqid(mt_rand(), true);
            $salted_password = $salt.$password.$salt;
            $hashed = hash('sha256', $salted_password);

            $query = "INSERT INTO Users (Username, Email, Password, Salt)"
                    . "VALUES (?,?,?,?);";
            
            $statement = mysqli_prepare($conn, $query);
            
            if ($statement) {
                $statement -> bind_param("ssss", $username, $email, $hashed, $salt);
                
                if ($statement -> execute()) {
                    header("location: ../index.php?error=true");
                    exit();
                } else {
                    header("location: ../index.php?error=false");
                    exit();
                }                
            }                      
        }                      
    }