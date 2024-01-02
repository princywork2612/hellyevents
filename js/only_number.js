function validate1(ev) {
    if (ev.keyCode < 48 || ev.keyCode > 57) {
        alert("Please enter a numeric value");
        ev.preventDefault();
        return false;
    }
    return true;
}


