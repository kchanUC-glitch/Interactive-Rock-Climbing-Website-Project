// use AJAX to submit the form data via php without refreshing the page. Using Jquery.
$(document).ready(function () {
    $("#searchBtn").on("click", function (e) {
        e.preventDefault();
        search();
    })})
function searchBtn() {

    alert("Successfully linked!")
}
// add another event handler for 

// use .load() to insert the results of ajax request; .load() was stripped of event handler.