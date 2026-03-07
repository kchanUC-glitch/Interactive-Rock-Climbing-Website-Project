// use AJAX to submit the form data via php without refreshing the page. Using Jquery.
$(document).ready(function () {
    $("#submitButton".on("click", function () {
        search();
    }))
})
function search() {
    alert("Successfully linked!")
}
// use .load() to insert the results of ajax request; .load() was stripped of event handler.