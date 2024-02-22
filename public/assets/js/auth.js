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
