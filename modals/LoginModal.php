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
