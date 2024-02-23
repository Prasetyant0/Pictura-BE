async function showErrorMessage(field, message) {
    const elementError = $("#" +  field + "-error");
    if (message) {
        $("#" +  field).removeClass("border-gray-300").addClass("border-red-600");
        elementError.text(message);
    } else {
        $("#" +  field).removeClass("border-red-600").addClass("border-gray-300");
        elementError.empty();
    }
}

function removeErrorClasses() {
    setTimeout(function () {
        $('#username-error, #email-error, #passwordSignup-error, #birthdate-error').empty();
        $('#username, #email, #passwordSignup, #birthdate').removeClass("border-red-600").addClass("border-gray-300");
    }, 5000);
}

$(document).ready(function () {
    $('#signup-form').on('submit', async function (e) {
        e.preventDefault();
        const formData = new FormData(this);
        const response = await fetch("/register", {
            method: "POST",
            body: formData
        });
        const data = await response.json();
        if (response.status == 200) {
            $('#close-signup').click()
            $('#open-auth').click()
        } else {
            showErrorMessage('username', data.errors.username);
            showErrorMessage('email', data.errors.email);
            showErrorMessage('passwordSignup', data.errors.passwordSignup);
            showErrorMessage('birthdate', data.errors.birthdate);
            removeErrorClasses();
        }
    });
});


// Show & Hide Password
const passwordInput = document.getElementById('password');
const passwordSignup = document.getElementById('passwordSignup');
const togglePasswordButton = document.getElementById('togglePassword');
const togglePasswordSignup = document.getElementById('togglePasswordSignup');
const browserSupportsShowHide = passwordInput.type !== 'password';

if (browserSupportsShowHide) {
    togglePasswordButton.style.display = 'none';
    togglePasswordSignup.style.display = 'none';
} else {
    togglePasswordButton.addEventListener('click', function () {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);

        const eyeIcon = togglePasswordButton.querySelector('i');
        eyeIcon.classList.toggle('bi-eye-slash');
        eyeIcon.classList.toggle('bi-eye');
    });

    togglePasswordSignup.addEventListener('click', function () {
        const type = passwordSignup.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordSignup.setAttribute('type', type);

        const eyeIcon = togglePasswordSignup.querySelector('i');
        eyeIcon.classList.toggle('bi-eye-slash');
        eyeIcon.classList.toggle('bi-eye');
    });
}
