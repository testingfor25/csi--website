<template>
    <div id="ServicesComponent">
        <b-container class="bv-example-row">
            <b-row class="mt-2">
                <b-col>
                    <h1 class="header-text">SERVICES</h1>
                </b-col>
            </b-row>
            <b-row class="mt-3">
                <b-col sm="6">
                        <img src="/storage/services/Customer_Care.png" alt fuild />
                        <span class="customer-care-text">Customer Care</span>
                </b-col>
                <b-col sm="6">
                    <img src="/storage/services/Manage_Services.png" alt fuild />
                    <span class="managed-services-text">Managed Services</span>
                </b-col>
            </b-row>
        </b-container>
    </div>
</template>

<script>
export default {
    name: "ServicesComponent_1"
}
</script>

<style lang="css" scoped>
.header-text {
    margin-top: 50px;
    color: #fff;
    font-size: 6vh;
    color:#FCF219;
}

.customer-care-text {
    font-size: 2.5vh;
    color: #fff;
    text-decoration: underline;
    position: absolute;
    top: 67%;
    left: 48%;
    transform: translate(-50%, -50%);
}

.managed-services-text {
    font-size: 2.5vh;
    color: #fff;
    text-decoration: underline;
    position: absolute;
    top: 67%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.col-sm-6 > img {
    object-fit: cover;
    display: inline-block;
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
    border-radius: 50%;
}
</style>