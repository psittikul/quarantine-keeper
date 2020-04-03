var monthMap = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
var dayMap = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

/**
 * Event handlers
 */
$("#medsModal").on("click", ".med-btn", function () {
    // Mark med as taken or not taken, accordingly
    $(this).attr("data-taken", function () {
        return $(this).attr("data-taken") === "no" ? "yes" : "no";
    });
});


function getDisplayDate() {
    var today = new Date();
    var displayDate = "Today is: " + dayMap[today.getDay()] + ", " + monthMap[today.getMonth()] + " " + today.getDate() + ", " + today.getFullYear();
}
