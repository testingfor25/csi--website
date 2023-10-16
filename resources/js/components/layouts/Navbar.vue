<template>
    <div
        id="navbar"
        v-if="this.$route.path !== '/admindashboard' && this.$route.path !== '/csiadmin' && this.$route.path !== '/admincareers' && this.$route.path !== '*' && this.$route.path !== '/pdf'"
    >
        <div>
            <b-navbar toggleable="lg" type="light" variant="info" class="navbar-white bg-white">
                <div>
                    <img
                        src="/storage/Circuit real LOGO (2450 x543-24.9).png"
                        alt="logo"
                        class="img-fluid"
                        id="csi-logo"
                    />
                </div>

                <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

                <b-collapse id="nav-collapse" is-nav>
                    <!-- Right aligned nav items -->
                    <b-navbar-nav class="ml-auto">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li
                                class="nav-item ml-4 font-weight-bold text-uppercase"
                                @click="getRoute()"
                            >
                                <router-link
                                    :class="[getRoute() === '/' ? activeClass : '']"
                                    class="nav-link custom-font"
                                    to="/"
                                >Home</router-link>
                            </li>

                            <li class="nav-item ml-4 font-weight-bold text-uppercase">
                                <router-link
                                    :class="[getRoute() === '/solutions' ? activeClass : '']"
                                    class="nav-link custom-font"
                                    to="/solutions"
                                >Solutions</router-link>
                            </li>

                            <li class="nav-item ml-4 font-weight-bold text-uppercase">
                                <router-link
                                    :class="[getRoute() === '/services' ? activeClass : '']"
                                    class="nav-link custom-font"
                                    to="/services"
                                >Services</router-link>
                            </li>

                            <li class="nav-item ml-4 font-weight-bold text-uppercase">
                                <router-link
                                    :class="[getRoute() === '/industries-we-serve' ? activeClass : '']"
                                    class="nav-link"
                                    to="/industries-we-serve"
                                >Industries We Serve</router-link>
                            </li>
                            <li class="nav-item ml-4 font-weight-bold text-uppercase">
                                <router-link
                                    :class="[getRoute() === '/about-us' ? activeClass : '']"
                                    class="nav-link custom-font"
                                    to="/about-us"
                                >About Us</router-link>
                            </li>
                            <li class="nav-item ml-4 font-weight-bold text-uppercase">
                                <router-link
                                    :class="[getRoute() === '/contact-us' ? activeClass : '']"
                                    class="nav-link custom-font"
                                    to="/contact-us"
                                >Contact</router-link>
                            </li>
                            <li class="nav-item ml-4 font-weight-bold text-uppercase">
                                <router-link
                                    :class="[getRoute() === '/careers' ? activeClass : '']"
                                    class="nav-link custom-font"
                                    to="/careers"
                                >Careers</router-link>
                            </li>
                        </ul>
                    </b-navbar-nav>
                </b-collapse>
            </b-navbar>
        </div>
    </div>
</template>

<script>
export default {
    name: "Navbar",
    data() {
        return {
            user: null,
            activeClass: 'active'
        }
    },
    methods: {
        getRoute() {
            return this.$router.currentRoute.path
        }
    },
    beforeCreate() {
        this.user = localStorage.getItem('access_token')
    }
};
</script>

<style lang="css" scoped>
    #csi-logo {
        width: 300px;
    }
    .custom-font {
        font-family: bubbleboddyneue;
        font-size: 1.1rem;
    }
    .active {
        /* border-bottom: 2.5px solid #21559E; */
        color: #1952A2 !important;
    }
    @media only screen and (max-width: 375px) {
        #csi-logo {
            width: 200px;
        }
    }
</style>
