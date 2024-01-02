function validateEmail(event) {
    const input = event.target.value;
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!regex.test(input)) {
        alert("Please enter a valid email address");
        event.preventDefault();
    }
}

function validateForm(event) {
    const emailInput = document.querySelector('input[name="email"]');
    const emailValue = emailInput.value;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(emailValue)) {
        alert("Please enter a valid email address");
        emailInput.focus();
        event.preventDefault();
    }
}

const form = document.querySelector('form');
form.addEventListener('submit', validateForm);
form.addEventListener('keydown', function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
    }
});
