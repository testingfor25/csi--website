<template>
    <div>
        <b-row>
            <b-col sm="6" style="padding-left:10%;">
                <b-row class="product-list">
                    <img src="/storage/solution/FDAS.png" alt />
                    <div class="product-list-text">
                        <h3 class="product-text">Alarm Systems</h3>
                        <ul class="product-item">
                            <li>Fire Detection and Alarm System (FDAS)</li>
                            <li>Panic Alarm System</li>
                        </ul>
                    </div>
                </b-row>
            </b-col>
            <b-col sm="6" style="padding-left:10%;">
                <b-row class="product-list">
                    <img src="/storage/solution/COMMUNICATION.png" alt />
                    <div class="product-list-text">
                        <h3 class="product-text">Communication</h3>
                        <ul class="product-item">
                            <li>PA/BGM</li>
                            <li>PABX</li>
                            <li>Intercom</li>
                            <li>Nurse Call</li>
                            <li>Conference System</li>
                        </ul>
                    </div>
                </b-row>
            </b-col>
        </b-row>
        <b-row>
            <b-col sm="6" style="padding-left:10%;">
                <b-row class="product-list">
                    <img src="/storage/solution/CABLING_SYSTEM.png" alt />
                    <div class="product-list-text">
                        <h3 class="product-text">Cabling System</h3>
                        <ul class="product-item">
                            <li>Structured Cabling</li>
                            <li>CATV</li>
                            <li>FTTH</li>
                        </ul>
                    </div>
                </b-row>
            </b-col>
            <b-col sm="6" style="padding-left:10%;">
                <b-row class="product-list">
                    <img src="/storage/solution/AV_SYSTEM.png" alt />
                    <div class="product-list-text">
                        <h3 class="product-text">AV System</h3>
                        <ul class="product-item">
                            <li>Amplifiers and Mixers</li>
                            <li>Projector</li>
                            <li>Screen</li>
                            <li>AV Accessories</li>
                        </ul>
                    </div>
                </b-row>
            </b-col>
        </b-row>
    </div>
</template>

<script>
export default {
    name: "SolutionComponent_2"
};
</script>

<style lang="css" scoped>

ul li{
    word-wrap:break-word;
    width:300px;
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