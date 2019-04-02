<?php
session_start();

if (isset($_SERVER['IsActive']) && $_SESSION[IsActive]) {
    header('location: membersOnly/welcome.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
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
        <!-- Container -->
        <div class="container-fluid">

            <!-- Navigation bar -->
            <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <!-- Logo -->
                    <h3 class="navbar-text text-white text-we">
                        <a class="navbar-brand" href="#" >
                            <img src="images/Logo.png" alt="CatFish" style="max-height: 45px; max-width: 45px;">
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
            <div class="jumbotron text-center" style="background-image: url('images/Mountain.jpg'); background-size: cover; background-position: center bottom;">
                <!--  -->
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
        </div>

        <!-- Modal for popup sign in screen -->
        <div class="modal fade" id="SignIn" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <!-- SignIn Header and Close button -->
                    <div class="modal-header text-center">
                        <h1 class="modal-title w-100 font-weight-bold"> Sign In </h1>
                        <button class="close" role="button" data-dismiss="modal">X</button>
                    </div>

                    <!-- Text Fields for Sign in and Sign up -->
                    <div class="modal-body">
                        <form method="POST" action="accountProcessing/login.php">

                            <?php
                            if (isset($_GET['error'])) {
                                echo '<script src="js/invalidLogin.js"></script>';
                            }
                            ?>

                            <!-- Sign In Field -->
                            <div id="loginUserGroup" class="form-group">
                                <label for="UsernameField">Username: </label>
                                <input id="UsernameField" name="userLogin" type="text" class="form-control" placeholder="Username">
                            </div>

                            <!-- Password Field -->
                            <div id="passwordUserGroup" class="form-group">
                                <label for="PasswordField"> Password: </label>
                                <input type="password" name="passwordLogin" id="PasswordField" class="form-control" placeholder="Password">
                            </div>

                            <button id="ProcessLogin" type="submit" name="processLogin" class="btn btn-lg bg-dark text-white font-weight-bold"> Login </button>
                        </form>
                    </div>

                    <!-- Footer -->
                    <div class="modal-footer">
                        <a href="#Register" data-toggle="modal" data-dismiss="modal">Not a Member?</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Register -->
        <div class="modal fade" id="Register" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <!-- Header -->
                    <div class="modal-header text-center">
                        <h1 class="modal-title w-100 font-weight-bold"> Register </h1>
                        <button class="close" role="button" data-dismiss="modal"> X </button>
                    </div>

                    <!-- Body -->
                    <div class="modal-body">
                        <form method="POST" action="accountProcessing/signup.php">

                            <?php
                            if (isset($_GET['error'])) {
                                echo '<script src="js/invalidFields.js"></script>';
                            }
                            ?>

                            <!-- Username Field -->
                            <div class="form-group">
                                <label for="RUsernameField"> Username: </label>
                                <input required="true" id="RUsernameField" class="form-control" name="rUsername" placeholder="Username">
                            </div>

                            <!-- Email Field -->
                            <div class="form-group">
                                <label for="REmailField">Email: </label>
                                <input required="true" type="email" id="RUEmailField" class="form-control" name="rEmail" placeholder="Email">
                            </div>

                            <!-- Password Field -->
                            <div class="form-group">
                                <label for="RPasswordField"> Password: </label>
                                <input required="true" type="password" id="RPasswordField" class="form-control" placeholder="Password" name="rPassword" >
                                <span class="is-invalid">Must be at least 8 characters long</span>
                            </div>

                            <!-- Confirm Password Field -->
                            <div id="confirmGroup" class="form-group">
                                <label for="RPasswordField"> Confirm Password: </label>
                                <input required="true" type="password" id="RCPasswordField" class="form-control" placeholder="Confirm Password" name="rCPassword" >
                            </div>
                            <button id="ProcessRegister" role="button" class="btn btn-lg bg-dark text-white font-weight-bold" type="submit" name="rSubmit"> Register </button>
                        </form>
                    </div>

                    <!-- Footer -->
                    <div class="modal-footer">
                        <a href="#SignIn" data-toggle="modal" data-dismiss="modal">Already Have an Account?</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="NoSuchAccount" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <!-- Header -->
                    <div class="modal-header text-center">
                        <h1 class="modal-title w-100 font-weight-bold"> Error </h1>
                        <button class="close" role="button" data-dismiss="modal"> X </button>
                    </div>

                    <div class="modal-body text-center">
                        <p> Account does not exist! </p>
                    </div>

                    <button class="btn btn-lg bg-dark text-white font-weight-bold" role="button" data-dismiss="modal"> Okay </button>
                </div>
            </div>
        </div>

        <div class="modal fade" id="RegisterResult" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <!-- Header -->
                    <div class="modal-header text-center">
                        <h1 class="modal-title w-100 font-weight-bold"> Register </h1>
                        <button class="close" role="button" data-dismiss="modal"> X </button>
                    </div>

                    <div id="successMessage" class="modal-body text-center">
                    </div>

                    <button class="btn btn-lg bg-dark text-white font-weight-bold" role="button" data-dismiss="modal"> Okay </button>
                </div>
            </div>
        </div>


        <!-- Footer -->
        <footer class="page-footer black text-center fixed-bottom">
            <div class="footer-copyright">
                © Not Really Copyrighted
                <a href="#"> CMPT350 Project</a>
            </div>
        </footer>

    </body>
</html>