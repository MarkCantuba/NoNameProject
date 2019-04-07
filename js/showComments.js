$.getparameter = function (link) {
    var regex = new RegExp('[\?&]' + link + '=([^&#]*)').exec(window.location.href);
    if (regex === null) {
        return null;
    }
    return decodeURI(regex[1]) || 0;
};

$(document).ready(function () {
    if ($.getparameter("threadName") !== null) {
        $("#CommentModal").modal("show");
    } else if ($.getparameter("thread") !== null) {
        $("#SubscribeModal").modal("show");
    } else if ($.getparameter("result") === "success") {
        $("#SuccessModal").modal("show");
    } else if ($.getparameter("result") === "fail") {
        $("$PhoneNumber").addClass("is-invalid");
        $("#SubscribeModal").modal("show");
    } else if ($.getparameter("threadUnsub") !== null) {
        $("#UnsubscribeModal").modal("show");
    }
});