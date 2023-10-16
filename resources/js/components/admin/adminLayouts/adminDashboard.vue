<template>
    <div id="dashboard">
        <adminNavbar v-if="user !== null" />
        <adminCareer />
    </div>
</template>

<script>
import adminNavbar from "./adminNavbar.vue"
import adminCareer from '../adminCareers/adminCareersComponent.vue'
export default {
    components: {
        adminNavbar,
        adminCareer
    },
    data() {
        return {
            user: localStorage.getItem('access_token')
        }
    },
    beforeCreate() {
        if(localStorage.getItem('access_token') === null) {
            // this.$router.push('/admindashboard')
            window.location.href = '/csiadmin'
        }
    }
};
</script>

<style lang="css" scoped>
    #dashboard {
        background-color: #fff !important;
    }
</style>
