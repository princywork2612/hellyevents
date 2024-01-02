function validateText(ev) {
    var input = ev.target.value;
    var regex = /^[a-zA-Z\s]*$/; // Regular expression that matches only letters and spaces

    if (!regex.test(input)) {
        alert("Please enter only letters and spaces");
        ev.target.value = ""; // Clear the input field
    }
}


