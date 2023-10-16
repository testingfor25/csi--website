/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap")

window.Vue = require("vue")

import router from './router/index'
import store from './store'

// Plugins
import './plugins/Bootstrap-Vue/bootstrap-vue'
import './plugins/VeeValidate/vee-validate'
import './plugins/Larave-Vue-Pagination/laravel-vue-pagination'
import './plugins/Vue-Toggle-Button/VueToggleButton'

// Helpers
import './Helpers/Helpers'

/**
 * @ Vue Js Production
 * Change The .env For Production or Local Environment
 * Comment below if compiling to development
 * @ Check your .env if prod or local
 **/
if (
    process.env.MIX_APP_ENV === 'prod' ||
    process.env.MIX_APP_ENV === 'staging'
) {
    Vue.config.productionTip = false;
    Vue.config.devtools = false;
    Vue.config.debug = false;
    Vue.config.silent = true;
}

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component("example-component", require("./components/ExampleComponent.vue").default);
Vue.component("Navbar", require("./components/layouts/Navbar.vue").default);
Vue.component('appFooter', require("./components/layouts/appFooter.vue").default);
Vue.component("csiadmin", require("./components/admin/adminLogin.vue").default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app",
    router,
    store
});
