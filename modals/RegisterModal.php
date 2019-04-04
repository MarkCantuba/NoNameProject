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