$.getparameter = function (link) {
    var regex = new RegExp('[\?&]' + link + '=([^&#]*)').exec(window.location.href);
    if (regex === null) {
        return null;
    }
    return decodeURI(regex[1]) || 0;
};

$(document).ready(function() {
    if ($.getparameter("threadName") !== null) {
        $("#CommentModal").modal("show");
    }
});