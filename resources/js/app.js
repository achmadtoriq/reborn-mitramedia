import './bootstrap';

document.addEventListener('DOMContentLoaded', function() {
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 2, // Number of slides per view
        spaceBetween: 10,  // Default space between slides
        loop: true,
        autoplay: {
            delay: 3000,
        },
        // Add breakpoints for responsive behavior
        breakpoints: {
            640: {
                slidesPerView: 2, // 1 slide on screens >= 640px
            },
            768: {
                slidesPerView: 3, // 2 slides on screens >= 768px
            },
            1024: {
                slidesPerView: 5, // 3 slides on screens >= 1024px
            },
        },
    });
});