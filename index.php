<?php
session_start();

if (isset($_SESSION['IsActive']) && $_SESSION['IsActive']) {
    header('location: membersOnly/categoryPage.php');
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> Login </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.5/css/mdb.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <!-- Bootstrap -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.5/js/mdb.min.js"></script>
    </head>


    <body class="d-flex flex-column">

            <!-- Navigation bar -->
            <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <!-- Logo -->
                    <h3 class="navbar-text text-white text-we">
                        <a class="navbar-brand" href="#" >
                            <img rel="prefetch" src="images/Logo.png" alt="CatFish" style="max-height: 45px; max-width: 45px;">
                        </a>
                        The Sketchy Web
                    </h3>

                    <!-- NavBar Buttons -->
                    <div>
                        <button class="btn btn-dark text-white btn-primary btn-info active"
                                data-toggle="modal" data-target="#SignIn"> Sign In </button>
                        <button class="btn btn-dark text-white btn-info" data-toggle="modal" data-target="#Register">
                            Sign up </button>
                    </div>
                </div>
            </nav>

            <!-- Jumbotron  Display -->
            <div rel="prefetch" class="jumbotron text-center" style="background-image: url('images/Mountain.jpg'); background-size: cover; background-position: center bottom;">
                <h1 class="animated zoomIn text-center display-1 text-white">
                    Welcome to the Sketchy Web!
                </h1>
                <h3 class="animated zoomIn delay-1s text-center text-white">
                    A website built to create discussions about anything!
                </h3>
                <p class="animated zoomIn delay-2s text-white text-center">Already have an account?</p>

                <!-- SignIn Button inside jumbotron -->
                <button type="button" class="animated zoomIn delay-3s btn btn-info btn-lg bg-dark"
                        data-toggle="modal" data-target="#SignIn">
                    Sign In
                </button>

        </div>

        <?php
        require_once './modals/LoginModal.php';
        require_once './modals/RegisterModal.php';
        require_once './modals/NoSuchAccountModal.php';
        require_once './headerFooter/Footer.php';
        ?>

    </body>
</html>