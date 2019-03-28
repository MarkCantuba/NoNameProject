$.getparameter = function (link) {
    var regex = new RegExp('[\?&]' + link + '=([^&#]*)').exec(window.location.href);
    if (regex === null) {
        return null;
    }
    return decodeURI(regex[1]) || 0;
 };

$(document).ready(function() {
    
    var errorMessage = $.getparameter('error');
    
    $("#SignIn").modal('show');
    
    if(errorMessage === "emptyUsername") {
        $("#UsernameField").addClass("is-invalid");
        $("#loginUserGroup").append('<div class="invalid-feedback"> Invalid Username </div>');
    } 
    else if (errorMessage === "emptyPassword") {
        $("#UsernameField").addClass("is-valid");
        $("#PasswordField").addClass("is-invalid");
        $("#passwordUserGroup").append('<div class="invalid-feedback"> Invalid Password </div>');       
    } 
    else if (errorMessage === "emptyBoth") {  
        $("#UsernameField").addClass("is-invalid");   
        $("#PasswordField").addClass("is-invalid");

        $("#loginUserGroup").append('<div class="invalid-feedback"> Invalid Username </div>');
        $("#passwordUserGroup").append('<div class="invalid-feedback"> Invalid Password </div>');
    } 
    else if (errorMessage === "userNotMatch") {
        $("#UsernameField").addClass("is-valid");
        $("#PasswordField").addClass("is-invalid");
        $("#passwordUserGroup").append('<div class="invalid-feedback"> Invalid Password </div>');
    }
});