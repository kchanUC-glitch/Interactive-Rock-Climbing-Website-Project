// use AJAX to submit the form data via php without refreshing the page. Using Jquery.
$(document).ready(function () {
    $("#searchBtn").on("keypress", function (e) {
        e.preventDefault();
        searchBtn();
    })})
function searchBtn() {
    var value = $("#searchVal").val();
    $.ajax({
        method: "GET",
        url: "formHandling.php",
        data: {name: value},
        success: function displaySearch () {
            //display results
        },
    })
    alert("Successfully linked!")
}
// add another event handler for 

// use .load() to insert the results of ajax request; .load() was stripped of event handler.