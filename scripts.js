const myButton = document.getElementById("submitButton")

myButton.addEventListener("click", search) 

// use AJAX to submit the form data via php without refreshing the page. Using Jquery.
function search() {
    // link to php here
    $("#submitButton").load("index.php", function () {
        alert("Ajax performed!");
    });
}