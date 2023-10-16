<template>
    <div id="services">
        <ServicesComponent_1 />
        <services-component-1 />
        <ServicesComponent_2 />
        <ServicesComponent_3 />
        <ServicesComponent_4 />
        <ServicesComponent_5 />
        <appFooter />
    </div>
</template>

<script>
import ServicesComponent_1 from '../../components/Services/ServicesComponent_1.vue'
import ServicesComponent_2 from '../../components/Services/ServicesComponent_2.vue'
import ServicesComponent_3 from '../../components/Services/ServicesComponent_3.vue'
import ServicesComponent_4 from '../../components/Services/ServicesComponent_4.vue'
import ServicesComponent_5 from '../../components/Services/ServicesComponent_5.vue'

import appFooter from "../../components/layouts/appFooter.vue"
export default {
    components: {
        ServicesComponent_1,
        ServicesComponent_2,
        ServicesComponent_3,
        ServicesComponent_4,
        ServicesComponent_5
    }
}
</script>

<style lang="css" scoped>

</style>