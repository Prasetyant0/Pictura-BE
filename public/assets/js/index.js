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
