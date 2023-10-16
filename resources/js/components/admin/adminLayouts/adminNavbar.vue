<template>
    <div id="adminNavbar">
        <div>
            <b-navbar toggleable="lg" type="dark" variant="dark">
                <b-container fluid="sm">
                    <b-navbar-brand href="#">
                        <img
                            src="/storage/Circuit real LOGO (2450 x543-24.9).png"
                            alt="logo"
                            class="img-fluid"
                            id="csi-logo"
                        />
                    </b-navbar-brand>

                    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

                    <b-collapse id="nav-collapse" is-nav>
                        <!-- Right aligned nav items -->
                        <b-navbar-nav class="ml-auto">
                            <!-- <b-nav-item id="manage-jobs">
                                <router-link
                                    class="text-decoration-none text-white"
                                    to="/admincareers"
                                >Manage Careers</router-link>
                            </b-nav-item>-->
                            <b-nav-item-dropdown text="username" right>
                                <template slot="button-content">{{ username }}</template>
                                <!-- <b-dropdown-item href="#">EN</b-dropdown-item>
                                <b-dropdown-item href="#">ES</b-dropdown-item>
                                <b-dropdown-item href="#">RU</b-dropdown-item>-->
                                <b-dropdown-item href="#" @click.prevent="logout">Logout</b-dropdown-item>
                            </b-nav-item-dropdown>
                        </b-navbar-nav>
                    </b-collapse>
                </b-container>
            </b-navbar>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            username: localStorage.getItem('username')
        }
    },
    methods: {
        logout(e) {
            e.preventDefault(e)
            this.$store
                .dispatch("logout", this.loginForm)
                .then(response => {
                    console.log(response)
                })
                .catch(error => {
                    console.log(error)
                })
        }
    }
};
</script>

<style lang="css" scoped>
#csi-logo {
  width: 200px;
}
#manage-jobs:hover {
    background-color: #202020 !important;
}
#__BVID__16:hover {
    background-color: #202020 !important;
}
@media only screen and (max-width: 375px) {
  #csi-logo {
    width: 200px;
  }
}
</style>