<template>
    <div id="products">
        <b-container fluid>
            <h1 class="header-text">PRODUCTS AND SOLUTIONS</h1>
            <h2 class="product-category-text">Security & Safety Solutions</h2>
            <SolutionComponent_1 />
            <h2 class="product-category-text">Auxiliary Systems</h2>
            <SolutionComponent_2 />
            <h2 class="product-category-text">Systems & Application</h2>
            <SolutionComponent_3 />
            <h2 class="product-category-text">Other System</h2>
            <SolutionComponent_4 />
        </b-container>
        <appFooter />
    </div>
</template>

<script>
import SolutionComponent_1 from "../../components/Solutions/SolutionComponent_1.vue";
import SolutionComponent_2 from "../../components/Solutions/SolutionComponent_2.vue";
import SolutionComponent_3 from "../../components/Solutions/SolutionComponent_3.vue";
import SolutionComponent_4 from "../../components/Solutions/SolutionComponent_4.vue";
export default {
    components: {
        SolutionComponent_1,
        SolutionComponent_2,
        SolutionComponent_3,
        SolutionComponent_4
    }
};
</script>

<style lang="css" scoped>
.header-text {
    font-size: 6vh;
    margin-top: 50px;
    color: #fff;
    color:#FCF219;
}
.product-category-text {
    font-size: 4vh;
    padding-top: 50px;
    margin-left: 50px;
    color:#FCF219;
    text-align: left;
    padding-left:6%;
}
</style>