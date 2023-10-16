<template>
    <div id="ServicesComponent">
        <b-container fluid class="bv-example-row">
            <b-row class="mt-2">
                <b-col>
                    <h1 class="header-text">MANAGED SERVICES</h1>
                </b-col>
            </b-row>
            <b-row class="mt-3">
                <b-col sm="6">
                    <!-- <h3 style="text-align:left; text-decoration:underline; padding-top:30px">
                        • System Audit/ Assesment
                        <br />• Preventive and Corrective Maintenance
                        <br />• System Performance Tuning
                        <br />• User Training and Orientation
                    </h3> -->
                    <ul class="managed-services">
                        <li>System Audit/ Assesment</li>
                        <li>Preventive and Corrective Maintenance</li>
                        <li>System Performance Tuning</li>
                        <li>User Training and Orientation</li>
                    </ul>
                </b-col>
                <b-col sm="6">
                    <img class="img-fluid" src="/storage/services/MS 3.png" alt/>
                </b-col>
            </b-row>
        </b-container>
    </div>
</template>

<script>
export default {
    name: "ServicesComponent_4"
}
</script>

<style lang="css" scoped>
.header-text {
    margin-top: 50px;
    color: #fff;
    font-size: 6vh;
    color:#FCF219;
}

.managed-services {
    margin-top: 15%;
    margin-left: 10%;
    padding:20px 60px 20px 50px;
    color: #fff;
    text-align: left;
    text-decoration: underline;
    word-wrap:break-word;
    font-size: 3.5vh;
}

.col-sm-6 > img {
    /* object-fit: cover; */
    top: -10%;
    display: inline-block;
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
    /* border-radius: 50%; */
}
</style>