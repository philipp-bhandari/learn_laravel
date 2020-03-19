function echo(some) {
    console.log(some);
}
window.Vue = require("vue");
Vue.component(
    "first-component",
    require("./components/FirstComponent.vue").default
);
const app = new Vue({
    el: "#app"
});

var swiper = new Swiper(".swiper-container", {
    slidesPerView: 1,
    spaceBetween: 10,
    // init: false,
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 40
        },
        1024: {
            slidesPerView: 5,
            spaceBetween: 50
        }
    }
});
