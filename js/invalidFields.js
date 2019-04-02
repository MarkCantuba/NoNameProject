$.getparameter = function (link) {
    var regex = new RegExp('[\?&]' + link + '=([^&#]*)').exec(window.location.href);
    if (regex === null) {
        return null;
    }
    return decodeURI(regex[1]) || 0;
};

$(document).ready(function () {

    var errorMessage = $.getparameter('error');

    if (errorMessage === "notMatch") {
        $("#Register").modal('show');
        $("#RPasswordField").addClass("is-invalid");
        $("#RCPasswordField").addClass("is-invalid");
        $("#RUEmailField").addClass("is-valid");
        $("#RUsernameField").addClass("is-valid");

        $("#RUEmailField").val($.getparameter('email'));
        $("#RUsernameField").val($.getparameter('username'));

        $("#confirmGroup").append('<div class="invalid-feedback"> Password doesn\'t match! </div>');
    }

    else if (errorMessage === "true") {
        $('#successMessage').append("<p>Registration Successful!<\p>");
        $('#RegisterResult').modal("show");
    }

    else if (errorMessage === "false") {
        $('#successMessage').append("<p>Account Already Exists!<\p>");
        $('#RegisterResult').modal("show");
    }

    else if (errorMessage === "passwordTooShort") {
        $("#Register").modal('show');
        $("#RPasswordField").addClass("is-invalid");
        $("#RCPasswordField").addClass("is-invalid");

        $("#RUEmailField").val($.getparameter('email'));
        $("#RUsernameField").val($.getparameter('username'));
    }

});