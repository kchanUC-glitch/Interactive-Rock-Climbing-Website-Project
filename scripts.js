const myButton = document.getElementById("submitButton")

myButton.addEventListener("click", submitForm) 

// use AJAX to submit the form data via php without refreshing the page
function submitForm() {
    alert("Form submitted!");
}