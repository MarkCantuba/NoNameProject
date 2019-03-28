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
    
    if (isset($_POST['processLogin'])) {
        if (empty($_POST['userLogin']) || empty($_POST['passwordLogin'])) {
            header("Location: ../index.php?error=EmptyFields");
        }
    }