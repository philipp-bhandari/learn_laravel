require("./bootstrap");

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
