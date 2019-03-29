<!-- 
Login conditions:
    Check if the fields are not empty.
        Send Parameter error=fill up the fields
    
    Check if the user does not exists
        Send Parameter error=does not exist

    Check if password match the user
        Send Parameter error=Wrong password if pass is wrongdo

    Check if the user successfully logged in
        Redirect user to welcome page with name on header!
        start_session();
        Session variables
            $_SESSION['User ID']
            $_SESSION['Username']
            $_SESSION['Active Status']

    Login Variables:
        - Button:   processLogin
        - Username: userLogin
        - Password: passwordLogin
-->

<?php 
    require_once './dbconfig.php';
    
    if (isset($_SESSION['active']) && $_SESSION['active'] == true) {
        header("location: views/welcome.php");
        exit();
    }
    
    if (isset($_POST['processLogin'])) {
        
        $Username = $_POST['userLogin'];
        $Password = $_POST['passwordLogin'];
        
        if (empty($Username) && empty($Password)) {
            header("Location: ../index.php?error=emptyBoth");
            exit();
        } else if (empty($Username)) {
            header("Location: ../index.php?error=emptyUsername");
            exit();
        } else if (empty($Password)) {
            header("Location: ../index.php?error=emptyPassword&Username=".$Username);
            exit();
        } else {
            
            $query = "SELECT Username, Password, Salt FROM Users WHERE Username LIKE ?;";
            $statement = mysqli_prepare($conn, $query);
            
            // modify this to support hashed password
            
            if ($statement) {
                $statement->bind_param("s", $Username);
                
                $statement ->execute();
                $statement ->store_result();
                
                if ($statement -> num_rows == 0) {
                    header("Location: ../index.php?error=noSuchAccount");
                    exit();
                } else {
                    $statement ->bind_result($user, $hashedPass, $pasSalt);
                    $statement -> fetch();
                    
                    $reHashed = hash("SHA256", $pasSalt.$Password.$pasSalt);
                    
                    if ($reHashed === $hashedPass) {
                        session_start();
                        
                        $_SESSION['Username'] = $user;
                        $_SESSION['IsActive'] = TRUE;
                        
                        header("Location: ../membersOnly/welcome.php");
                        
                    } else {
                        header("Location: ../index.php?error=wrongPassword&Username=".$Username);
                        exit();
                    }
                }
                
            }
        }    
    }