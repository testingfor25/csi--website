<template>
    <div id="ServicesComponent">
        <b-container fluid class="bv-example-row">
            <b-row>
                <b-col>
                    <h1 class="header-text mt-3">CSI SOLUTION CYCLE</h1>
                </b-col>
            </b-row>
                <b-col sm="12">
                    <img class="img-fluid" src="/storage/services/Cycle.png" alt/>
                </b-col>
            
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