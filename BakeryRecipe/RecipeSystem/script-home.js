const Save1 = document.querySelector('.save-1');

document.querySelector('.save-1').addEventListener('click', () => {
    Save1.classList.toggle('bi-bookmark-fill-click-1');
});

const Save2 = document.querySelector('.save-2');

document.querySelector('.save-2').addEventListener('click', () => {
    Save2.classList.toggle('bi-bookmark-fill-click-2');
});

const Save3 = document.querySelector('.save-3');

document.querySelector('.save-3').addEventListener('click', () => {
    Save3.classList.toggle('bi-bookmark-fill-click-3');
});

const Save4 = document.querySelector('.save-4');

document.querySelector('.save-4').addEventListener('click', () => {
    Save4.classList.toggle('bi-bookmark-fill-click-4');
});

var swiper = new Swiper(".mySwiper-7", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    grabCursor: 'true',
    centerSlide: 'true',
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next-7",
        prevEl: ".swiper-button-prev-7",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
});