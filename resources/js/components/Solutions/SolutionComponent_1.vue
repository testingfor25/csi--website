<template>
    <div>
        <b-row>
            <b-col sm="6" style="padding-left:10%;">
                <b-row class="product-list">
                    <img src="/storage/solution/CCTV.png" alt />
                    <div class="product-list-text">
                        <h3 class="product-text">CCTV</h3>
                        <ul class="product-item">
                            <li>IP System</li>
                            <li>AHD System</li>
                            <li>Video Management System/Command Center</li>
                        </ul>
                    </div>
                </b-row>
              
            </b-col>
            <b-col sm="6" style="padding-left:10%;">
                <b-row class="product-list">
                    <img src="/storage/solution/ANTI_THEFT_SYSTEM.png" alt />
                    <div class="product-list-text">
                        <h3 class="product-text">Anti-Theft System</h3>
                        <ul class="product-item">
                            
                            <li>Security Antenna</li>
                            <li>Security Tag & Labels</li>
                            <li>Detachers and Deactivators</li>
                        </ul>
                    </div>
                </b-row>
            </b-col>
        </b-row>
        <br />
        <b-row>
            <b-col sm="6" style="padding-left:10%;">
                <b-row class="product-list">
                    <img src="/storage/solution/ACCESS_CONTROL_SYSTEM.png" alt />
                    <div class="product-list-text">
                        <h3 class="product-text">Access Control System</h3>
                        <ul class="product-item">
                            <li>Turnstile</li>
                            <li>Bollards</li>
                            <li>Readers</li>
                            <li>Controllers</li>
                            <li>Detectors</li>
                        </ul>
                    </div>
                </b-row>
            </b-col>
            <b-col sm="6" style="padding-left:10%;">
                <b-row class="product-list">
                    <img src="/storage/solution/PARKING_SYSTEM.png" alt />
                    <div class="product-list-text">
                        <h3 class="product-text">Parking System</h3>
                        <ul class="product-item">
                            <li>Gate/Boom Barriers</li>
                            <li>Parking Guidance System</li>
                            <li>Traffic Signaling System</li>
                        </ul>
                    </div>
                </b-row>
            </b-col>
            <br />
            <b-col sm="6" style="padding-left:10%;">
                <b-row class="product-list">
                    <img src="/storage/solution/ICON 1.png" alt />
                    <div class="product-list-text">
                        <h3 class="product-text">Pneumatic Tube System</h3>
                        <ul class="product-item">
                            
                            <li>Hospital Application</li>
                            <li>Casino Application</li>
                        </ul>
                    </div>
                </b-row>
            </b-col>
        </b-row>
        <br />
    </div>
</template>

<script>
export default {
    name: "SolutionComponent_1"
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