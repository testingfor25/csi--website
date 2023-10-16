<template>
    <div id="industries-we-serve">
        <industries />
        <appFooter />
    </div>
</template>

<script>
import industries from '../../components/Industries/IndustriesComponent.vue'
import appFooter from "../../components/layouts/appFooter.vue"
export default {
    components: {
        industries,
        appFooter
    }

}
</script>

<style>

</style>