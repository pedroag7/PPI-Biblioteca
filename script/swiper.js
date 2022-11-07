let slidesPerView

if (innerWidth < 512) {
    slidesPerView = 3
} else if (innerWidth < 768) {
    slidesPerView = 4
} else if (innerWidth < 1024) {
    slidesPerView = 5
}else if (innerWidth < 1200) {
    slidesPerView = 6
} else {
    slidesPerView = 6
}

var swiper = new Swiper(".mySwiper", {
    slidesPerView,
    spaceBetween: 30,
    slidesPerGroup: slidesPerView,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
})