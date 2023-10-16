<template>
    <div id="about-us">
        <About />
        <appFooter />
    </div>
</template>

<script>
import About from '../../components/About/AboutComponent.vue'
import appFooter from "../../components/layouts/appFooter.vue"
export default {
    components: {
        About,
        appFooter
    }

}
</script>

<style>

</style>