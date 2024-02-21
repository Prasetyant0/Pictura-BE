// Swiper Config
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 6,
    spaceBetween: 10,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        position: "top",
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    reverse: true,
    // breakpoints: {
    //     640: {
    //         slidesPerView: 2,
    //         spaceBetween: 10,
    //     },
    //     768: {
    //         slidesPerView: 4,
    //         spaceBetween: 10,
    //     },
    //     1024: {
    //         slidesPerView: 5,
    //         spaceBetween: 10,
    //     },
    // },
});

// Scroll Config
document.addEventListener('DOMContentLoaded', function () {
    const arrowButton = document.querySelector('.arrow-button');

    arrowButton.addEventListener('click', function () {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});

document.getElementById("downButton").addEventListener("click", function () {
    document.getElementById("works").scrollIntoView({
        behavior: "smooth",
        block: "center"
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
