<template>
    <div>
        <b-row>
            <b-col sm="6" style="padding-left:10%;">
                <b-row class="product-list">
                    <img src="/storage/solution/SYSTEM_APP.png" alt />
                    <div class="product-list-text">
                        <ul class="product-item">
                            <li>Ticketing System</li>
                            <li>HRIS with Payroll System</li>
                            <li>Vehicle Tracking System</li>
                            <li>Multimedia Queuing System</li>
                        </ul>
                    </div>
                </b-row>
            </b-col>
        </b-row>
    </div>
</template>

<script>
export default {
    name: "SolutionComponent_3"
};
</script>

<style lang="css" scoped>

ul li{
    list-style-type:none;
    word-wrap:break-word;
    width:350px;
}

img {
    width: 200px;
    height: 200px;
    border-radius: 50%;
}

.product-text {
    padding-top: 20px;
    margin-left: 10px;
    color: #fff;
    font-size: 2.7vh;
    text-align: left;
}

.product-item {
    text-align: left;
    margin-left: 10px;
    color: #fff;
    text-decoration: underline;
    font-size: 2.7vh;
}

@media only screen and (max-width: 375px) {
     .product-list-text {
        margin-left: 50px;
        text-align: center;
    }
}

@media only screen and (max-width: 600px) {
    img {
        height: 100%;
        border-radius: 50%;
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }
    .product {

    }
    .product-text {

        text-align: left;
    }
    .product-item {
        text-align: left;
    }
}
</style>