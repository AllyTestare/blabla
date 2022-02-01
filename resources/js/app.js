require("./bootstrap");

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

window.Vue = require("vue").default;
import moment from "moment";


import Gate from "./Gate";
Vue.prototype.$gate = new Gate(window.user);


import Form from "vform";
window.Form = Form;
import {
    Button,
    HasError,
    AlertError,
    AlertErrors,
    AlertSuccess,
} from "vform/src/components/bootstrap5";
// 'vform/src/components/bootstrap4'
// 'vform/src/components/tailwind'

Vue.component(Button.name, Button);
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);
Vue.component(AlertErrors.name, AlertErrors);
Vue.component(AlertSuccess.name, AlertSuccess);

// import { Form, HasError, AlertError } from "vform";

// SweetAlert

import "sweetalert2/src/sweetalert2.scss";
import Swal from "sweetalert2";
window.Swal = Swal;

const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
    },
});

window.Toast = Toast;

// pagination

Vue.component("pagination", require("laravel-vue-pagination"));

// Progress bar
import VueProgressBar from "vue-progressbar";
Vue.use(VueProgressBar, {
    color: "rgb(143, 255, 199)",
    failedColor: "red",
    thickness: "3px",
});

// Vue.use(VueProgressBar, options);
// const options = {
//     color: "#bffaf3",
//     failedColor: "#874b4b",
//     thickness: "5px",
//     transition: {
//         speed: "3s",
//         opacity: "0.6s",
//         termination: 300,
//     },
//     autoRevert: true,
//     location: "left",
//     inverse: false,
// };

// ===========

// window.Form = Form;
// Vue.component(HasError.name, HasError);
// Vue.component(AlertError.name, AlertError);

import VueRouter from "vue-router";
import Vue from "vue";
// import routes from './routes'
// C:\laragon\www\example-app\node_modules\vform\src\components\bootstrap5
// node_modules\vform\src\components\bootstrap5

Vue.use(VueRouter);

const routes = [
    {
        path: "/dashboard",
        component: require("./components/Dashboard.vue").default,
    },
    {
        path: "/profile",
        component: require("./components/Profile.vue").default,
    },
    { path: "/users", component: require("./components/Users.vue").default },
    { path: "/developer", component: require("./components/Developer.vue").default },
    { path: "*", component: require("./components/NotFound.vue").default },
];

// const router = new VueRouter(routes)

const router = new VueRouter({
    routes: routes,
    mode: "history",
});

// Filtre

Vue.filter("upText", function (text) {
    return text.charAt(0).toUpperCase() + text.slice(1);
});

Vue.filter("myDate", function (created) {
    return moment(created).format("MMMM Do YYYY");
});

window.Fire = new Vue();

// componenta

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);

Vue.component(
    "not-found",
    require("./components/NotFound.vue").default
);

const app = new Vue({
    el: "#app",
    // mounted() {
    //             console.log(window.user);
    //         },
    router,
    data: {
        search: "",
    },
    methods: {
        searchit: _.debounce(() => {
            Fire.$emit("searching");
        }, 1000),

        printme() {
            window.print();
        },
    },
});

// import VeeValidate from "vee-validate";

// Vue.use(VeeValidate);

// http request
// const app2 = new Vue({
//     el: '#app',

//     mounted() {
//         console.log(window.user);
//     }
// })