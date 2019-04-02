$.getparameter = function (link) {
    var regex = new RegExp('[\?&]' + link + '=([^&#]*)').exec(window.location.href);
    if (regex === null) {
        return null;
    }
    return decodeURI(regex[1]) || 0;
};

$(document).ready(function () {

    var errorMessage = $.getparameter('error');



    if (errorMessage === "emptyUsername") {
        $("#SignIn").modal('show');
        $("#UsernameField").addClass("is-invalid");
        $("#loginUserGroup").append('<div class="invalid-feedback"> Username Required </div>');
    }
    else if (errorMessage === "emptyPassword") {
        var userName = $.getparameter("Username");
        $("#SignIn").modal('show');
        $("#UsernameField").addClass("is-valid");
        $("#PasswordField").addClass("is-invalid");

        $("#UsernameField").val(userName);
        $("#passwordUserGroup").append('<div class="invalid-feedback"> Password Required </div>');
    }
    else if (errorMessage === "emptyBoth") {
        $("#UsernameField").addClass("is-invalid");
        $("#PasswordField").addClass("is-invalid");
        $("#SignIn").modal('show');
        $("#passwordUserGroup").append('<div class="invalid-feedback"> Please fill up fields! </div>');
    }
    else if (errorMessage === "userNotMatch") {
        $("#SignIn").modal('show');
        $("#UsernameField").addClass("is-valid");
        $("#PasswordField").addClass("is-invalid");
        $("#passwordUserGroup").append('<div class="invalid-feedback"> Invalid Password </div>');
    }
    else if (errorMessage === "noSuchAccount") {
        $("#NoSuchAccount").modal("show");
    }

    else if (errorMessage === "wrongPassword") {
        var userName = $.getparameter("Username");

        $("#SignIn").modal('show');
        $("#UsernameField").addClass("is-valid");
        $("#PasswordField").addClass("is-invalid");

        $("#UsernameField").val(userName);
        $("#passwordUserGroup").append('<div class="invalid-feedback"> Password doesn\'t match </div>');
    }
});