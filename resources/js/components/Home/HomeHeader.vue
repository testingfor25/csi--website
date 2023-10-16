<template>
    <b-container fluid>
        <b-row>
            <b-col sm="6">
                <div>
                    <h1 id="csi-home-text">
                        The <span style="color: #FFFF0B;">LEADING</span> Technology
                        <br />Solutions Authority
                    </h1>
                    <div id="csi-home-text-2">
                        <h5>Provider of proven business solutions.
                            <br />Trusted and recommended for over <b>24 years</b>. 
                        </h5>
                    </div>
                    <!-- <b-col sm="7"> -->
                        <!-- <div id="csi-home-text-2">
                            <h5>Provider of proven business solutions.
                                Trusted and recommended for over <b>24 years</b>. 
                                Understanding the challenges of business 
                                establishments today and anticipiting the 
                                troubles you will be facing tomorrow 
                                underscores our strong commitment to 
                                innovation.
                            </h5>
                        </div> -->
                        <div id="csi-home-text-3">
                            <h5>
                                Understanding the challenges of business
                                <br />establishments today and anticipating the
                                <br />troubles you will be facing tomorrow,
                                <br />underscores our strong commitment to innovation.
                            </h5>
                        </div>
                    <!-- </b-col> -->
                </div>
            </b-col>
            <b-col sm="6">
                <img id="csi-logo" class="img-fluid" src="/storage/HOME PAGE/ICON BG.png" />
            </b-col>
        </b-row>
    </b-container>
</template>

<script>
export default {
    name: "HomeHeader"
};
</script>

<style lang="css" scoped>

#csi-home-text {
    margin-top: 25vh;
    margin-left: 5vh;
    color: #fff;
    text-align: left;
    font-size: 3.5rem;
    font-weight: lighter;
}
#csi-home-text-2 {
    margin-top: 2.5vh;
    margin-left: 5vh;
    color: #fff;
    font-size: 1.5rem;
    text-align: justify;
    /* justify-content: center; */
    /* width: 50%; */
}
#csi-home-text-3 {
    margin-top: 2.5vh;
    margin-left: 5vh;
    color: #fff;
    font-size: 1.5rem;
    text-align: justify;
}
#csi-logo {
    margin-top: 5px;
    background-size: 100% 100%;
}
@media only screen and (max-width: 800px) {
    #csi-logo {
        display: none;
    }
}

@media only screen and (max-width: 414px) {

    #csi-home-text-2 > h5 {
        font-size: 1.1rem;
    }
    #csi-home-text-3 > h5 {
        font-size: 1.1rem;
    }
}

@media only screen and (max-width: 375px) {
    #csi-home-text-2 > h5 {
        font-size: 1rem;
    }
    #csi-home-text-3 > h5 {
        font-size: 1rem;
    }
}

@media only screen and (max-width: 320px) {
    #csi-home-text-2 > h5 {
        font-size: 0.9rem;
    }
    #csi-home-text-3 > h5 {
        font-size: 0.9rem;
    }
}

</style>
