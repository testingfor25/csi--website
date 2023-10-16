<template>
    <div id="ServicesComponent">
        <b-container class="bv-example-row">
            <b-row class="mt-2">
                <b-col>
                    <h1 class="header-text">NATIONWIDE COVERAGE</h1>
                    <h3><span class="sub-header-text"><span style="color: #FCF219">CSI</span> PROJECTS</span></h3>
                </b-col>
            </b-row>
        </b-container>
        <b-container fluid class="csi-projects" style="padding:0px 70px 50px 70px;">
            <b-row class="mt-5">
                <b-col sm="3">
                    <div>
                        <ul class="project-list" style="text-align:left">
                            <li>ABS-CBN Corporation</li>
                            <li>Ace Hardware Philippines Inc.</li>
                            <li>Christ’s Commission Fellowship</li>
                            <li>Development Bank of the Philippines</li>
                            <li>E-Commerce Phils., Inc.</li>
                            <li>Far Eastern University</li>
                            <li>Globe Telecom Inc.</li>
                            <li>Green Cross Incorporated</li>
                            <li>Harem Inc.</li>
                            <li>IOM Philippines</li>
                            <li>JT International (Philippines) Inc.</li>
                            <li>KCC Shopping Center</li>
                            <li>Megaworld Corporation</li>
                        </ul>
                    </div>
                </b-col>
                <b-col sm="6">
                    <div class="ph-logo">
                        <img src="/storage/services/PH.png" alt fuild />
                    </div>
                </b-col>
                <b-col sm="3">
                        <ul class="project-list" style="text-align:right">
                            <li>Miniso Philippines Inc.</li>
                            <li>Philippine Airlines Inc.</li>
                            <li>Robinsons Lands Corporation</li>
                            <li>Robinsons Specialty Stores Inc.</li>
                            <li>Rustan Supercenter Inc.</li>
                            <li>Samsung Electronics Philippines Corp.</li>
                            <li>Shangri-La Hotel & Spa</li>
                            <li>SM Mart Inc.</li>
                            <li>St. Luke's Medical Center</li>
                            <li>Suntrust Properties Inc.</li>
                            <li>Suyen Corporation</li>
                            <li>The Medical City</li>
                            <li>World Balance International Inc.</li>
                        </ul>
                </b-col>
            </b-row>
        </b-container>
    </div>
</template>

<script>
export default {
    name: "ServicesComponent_2"
}
</script>

<style lang="css" scoped>
.header-text {
    margin-top: 30px;
    margin-bottom: 30px;
    font-size: 6vh;
    color:#FCF219;
}

.sub-header-text {
    padding: 12px;
    color: #fff;
    background-color: rgba(18, 54, 104, 0.3);
}

ul li {
    color: #fff;
    list-style-type:none;
    word-wrap:break-word;
    font-size: 2.5vh;
}

.ph-logo {
    position: relative;
    width: 100%;
    height: 0;
    padding: 100% 0 0;
    overflow: hidden;
}

.ph-logo img {
    color: rgba(18, 54, 104, 0.3);
    position: absolute;
    top: -50px;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: contain;
}

@media only screen and (max-width: 360px) {
    ul li {
        text-align: center;
    }
    .technical-services {
        margin-left: auto;
        color: #f2f2f2;
        font-size: 1.2rem;
        text-align: justify;
    }
}

@media only screen and (max-width: 689px) {
    .csi-projects {
        padding:0px 30px 0px 30px;
    }
    .ph-logo img {
        top: 0px;
    }
}
</style>