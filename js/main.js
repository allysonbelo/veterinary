let dropdown = document.querySelector('.header__menu--mobile');
let popup = document.querySelector('.menu__mobile_popup');

dropdown.addEventListener('click', () => {
    popup.classList.toggle('active');
})

// slider - Start
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
//Slider - End