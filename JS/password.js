
function validatePasswords(event) {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('cpassword').value;
    const errorMessage = document.getElementById('error_message');

    if (password !== confirmPassword) {
        event.preventDefault();
        errorMessage.textContent = "Passwords do not match!";
        errorMessage.style.color = "red";
        return false;
    }

    errorMessage.textContent = "";
    return true;
}

document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('signup');
    form.addEventListener('submit', validatePasswords);
});
