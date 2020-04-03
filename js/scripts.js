var monthMap = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
var dayMap = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});
function getDisplayDate() {
    var today = new Date();
    var displayDate = "Today is: " + dayMap[today.getDay()] + ", " + monthMap[today.getMonth()] + " " + today.getDate() + ", " + today.getFullYear();
}
