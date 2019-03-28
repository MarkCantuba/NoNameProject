$(document).ready(function() {
   $("#SignIn").modal('show');
   $("#UsernameField").addClass("is-invalid");   
   $("#PasswordField").addClass("is-invalid");
   
   $("#loginUserGroup").append('<div class="invalid-feedback"> Invalid Username </div>');
   $("#passwordUserGroup").append('<div class="invalid-feedback"> Invalid Password </div>');
});