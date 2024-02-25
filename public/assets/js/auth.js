// async function showErrorMessage(field, message) {
//     const elementError = $("#" +  field + "-error");
//     if (message) {
//         $("#" +  field).removeClass("border-gray-300").addClass("border-red-600");
//         elementError.text(message);
//     } else {
//         $("#" +  field).removeClass("border-red-600").addClass("border-gray-300");
//         elementError.empty();
//     }
// }

// function removeErrorClasses() {
//     setTimeout(function () {
//         $('#username-error, #email-error, #passwordSignup-error, #birthdate-error').empty();
//         $('#username, #email, #passwordSignup, #birthdate').removeClass("border-red-600").addClass("border-gray-300");
//     }, 5000);
// }

// $(document).ready(function () {
//     $('#signup-form').on('submit', async function (e) {
//         e.preventDefault();
//         const formData = new FormData(this);
//         const response = await fetch("/register", {
//             method: "POST",
//             body: formData
//         });
//         const data = await response.json();
//         if (response.status == 200) {
//             $('#close-signup').click()
//             $('#open-auth').click()
//         } else {
//             showErrorMessage('username', data.errors.username);
//             showErrorMessage('email', data.errors.email);
//             showErrorMessage('passwordSignup', data.errors.passwordSignup);
//             showErrorMessage('birthdate', data.errors.birthdate);
//             removeErrorClasses();
//         }
//     });
// });

function showErrorMessage(field, message) {
    const elementError = $("#" + field + "-error");
    if (message) {
        $("#" + field).removeClass("border-gray-300").addClass("border-red-600");
        elementError.text(message);
    } else {
        $("#" + field).removeClass("border-red-600").addClass("border-gray-300");
        elementError.empty();
    }
}

function removeErrorClasses() {
    setTimeout(function () {
        $('#username-error, #email-error, #passwordSignup-error, #birthdate-error').empty();
        $('#username, #email, #passwordSignup, #birthdate').removeClass("border-red-600").addClass("border-gray-300");
    }, 5000);
}

// $(document).ready(function () {
//     $('#signup-form').on('submit', async function (e) {
//         e.preventDefault();
//         const formData = new FormData(this);
//         const response = await fetch("/register", {
//             method: "POST",
//             body: formData
//         });
//         const data = await response.json();
//         if (response.status == 200) {
//             window.location.href = "/home";
//         } else {
//             showErrorMessage('username', data.errors.username);
//             showErrorMessage('email', data.errors.email);
//             showErrorMessage('passwordSignup', data.errors.passwordSignup);
//             showErrorMessage('birthdate', data.errors.birthdate);
//             removeErrorClasses();
//         }
//     });
// });

$(document).ready(function () {
    $('#signup-form').on('submit', async function (e) {
        e.preventDefault();
        const formData = new FormData(this);

        try {
            const response = await fetch("/register", {
                method: "POST",
                body: formData
            });

            const data = await response.json();

            if (response.status == 200) {
                window.location.href = "/home";
                toastr.success('Welcome ${data.user} in Pictura');
            } else {
                showErrorMessage('username', data.errors.username);
                showErrorMessage('email', data.errors.email);
                showErrorMessage('passwordSignup', data.errors.passwordSignup);
                showErrorMessage('birthdate', data.errors.birthdate);
                removeErrorClasses();
            }
        } catch (error) {
            console.error("Error:", error);
        }
    });
});

// document.getElementById('login-form').addEventListener('submit', async (event) => {
//     event.preventDefault();

//     const usernameEmail = document.getElementById('username-email').value;
//     const password = document.getElementById('password').value;
//     const token = document.querySelector('input[name="_token"]').value;

//     try {
//         const response = await fetch('/authenticate', {
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/json',
//                 'X-CSRF-TOKEN': token
//             },
//             body: JSON.stringify({
//                 usernameEmail,
//                 password,
//             }),
//         });

//         const data = await response.json();

//         if (response.ok) {
//             if (data.status === 'success') {
//                 // Redirect based on user role if needed
//                 window.location.href = '/home';
//             } else {
//                 console.log(data.message);
//             }
//         } else {
//             console.log(data.message);  // Log the error message
//         }
//     } catch (error) {
//         console.error('An error occurred during the fetch operation:', error);
//     }
// });



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
