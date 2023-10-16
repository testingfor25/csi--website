window.Vue = require("vue")

import VueRouter from "vue-router"
Vue.use(VueRouter);

// Logged In User
let user = localStorage.getItem('access_token');

const routes = [
    {
        path: "/",
        component: require("../pages/Home/Home.vue").default
    },
    /**
     * @ Error Pages
     **/
    {
        path: '*',
        component: require('../pages/ErrorPages/404.vue').default
    },
    {
        path: "/solutions",
        component: require("../pages/Solutions/Solutions.vue").default
    },
    {
        path: "/admindashboard",
        component: require("../components/admin/adminLayouts/adminDashboard.vue").default,
        beforeEnter: requireLogin
    },
    {
        path: "/admincareers",
        component: require("../components/admin/adminCareers/adminCareersComponent.vue").default,
        beforeEnter: requireLogin
    },
    {
        path: "/csiadmin",
        component: require("../components/admin/adminLogin.vue").default
    },
    {
        path: "/services",
        component: require("../pages/Services/Services.vue").default
    },
    {
        path: "/industries-we-serve",
        component: require("../pages/Industries/Industries.vue").default
    },
    {
        path: "/about-us",
        component: require("../pages/About/About.vue").default
    },
    {
        path: "/contact-us",
        component: require("../pages/Contact/Contact.vue").default
    },
    {
        path: "/careers",
        component: require("../pages/Careers/Careers.vue").default
    },
    {
        path: "/pdf",
        component: require("../components/Content/CsiPdf.vue").default
    }
];

/**
 * @ Route Guards
 * Authentication Login 
 **/
function requireLogin(to, from, next) {
    if (user === "undefined" || user === null || user === false) {
        if (user === "undefined") {
            localStorage.clear();
            location.reload();
        }
        window.location.href = "/";
    } else {
        next(true)
    }
}

export default new VueRouter({
    mode: "history",
    routes
});
