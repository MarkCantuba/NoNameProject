
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.5/css/mdb.min.css" rel="stylesheet">
        
        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.5/js/mdb.min.js"></script>
    </head>

    <body>
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
                        <button class="btn btn-dark text-white btn-primary btn-lg active"
                                data-toggle="modal" data-target="#SignIn"> Sign In </button>
                        <button class="btn btn-dark text-white btn-lg" data-toggle="modal" data-target="#Register">
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
                        <form method="POST">
                            <!-- Sign In Field -->
                            <div class="form-group">
                                <label for="UsernameField">Username: </label>
                                <input id="UsernameField" type="text" class="form-control" placeholder="Username">
                            </div>

                            <!-- Password Field -->
                            <div class="form-group">
                                <label for="PasswordField"> Password: </label>
                                <input type="password" id="PasswordField" class="form-control" placeholder="Password">
                            </div>

                            <button id="ProcessLogin" type="submit" name="processLogin"
                                    class="btn btn-lg bg-dark text-white font-weight-bold"> Login </button>
                        </form>
                    </div>
                    <!-- Footer -->
                    <div class="modal-footer">
                        <a href="#Register" data-toggle="modal" data-dismiss="modal">Not a Member?</a>
                    </div>
                </div>
            </div>
        </div>
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
                        <!-- Username Field -->
                        <div class="form-group">
                            <label for="RUsernameField">Username: </label>
                            <input id="RUsernameField" class="form-control" placeholder="Username">
                        </div>

                        <!-- Email Field -->
                        <div class="form-group">
                            <label for="REmailField">Email: </label>
                            <input type="email" id="RUEmailField" class="form-control" placeholder="Email">
                        </div>

                        <!-- Password Field -->
                        <div class="form-group">
                            <label for="RPasswordField"> Password: </label>
                            <input type="password" id="RPasswordField" class="form-control" placeholder="Password">
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="modal-footer">
                        <a href="#SignIn" data-toggle="modal" data-dismiss="modal">Already Have an Account?</a>
                    </div>

                    <button id="ProcessRegister" role="button" class="btn btn-lg bg-dark text-white font-weight-bold"> Register </button>

                </div>
            </div>
        </div>


        <!-- Footer -->
        <footer class="page-footer black text-center" style="position: absolute; bottom: 0; width: 100%;">
            <div class="footer-copyright">
                © Not Really Copyrighted
                <a href="#"> CMPT350 Project</a>
            </div>
        </footer>

    </body>
</html>