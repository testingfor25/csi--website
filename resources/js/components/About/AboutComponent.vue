<template>
    <div id="about-us">
        <b-container fluid class="bv-example-row">
            <b-row>
                <b-col sm="6" style="padding:5%">
                    <h3 class="text-justify mt-4 text-white">
                        About
                        <span>CSI</span>
                    </h3>

                    <div class="ellipsis">
                        <div class="try">
                            <p class="text-justify mt-4 text-white">
                                <span>CIRCUIT SOLUTIONS, INC. (INC)</span>
                                is a technology company incorporated
                                with a vison to provide low-cost, high performance,electornic based
                                systems that present the highest value to our customers. Our mission
                                is to have excellence and technology pervasive in all our products and
                                to continue to innovate and respond to the ever-changing needs of
                                the market.<br /><br />
                            <!-- </p>
                            <p> -->
                                In January 1996, CSI Began full operations by offering CCTV
                                Monitoring and Surveillance Systems, and Electronic Article
                                Surveillance (EAS) Systems, commonly referred to as anti-shoplifting
                                systems. It has since evolved and diversified into other product lines
                                not only for the retail market but also for the security and electronics
                                industry.<br /><br />
                            <!-- </p>
                            <p> -->
                                Over the years, CSI has continued with its rock-solid commitment to
                                market only quality products and to provide excellent customer
                                service and technical support. This combination has resulted in CSI
                                making substantial in roads in the different market the company has
                                ventured into.<br /><br />
                            <!-- </p>
                            <p> -->
                                At CSI, we greatly value our customers as they represent the collective
                                vote of confidence that their companies have given CSI. For our part,
                                CSI continually strives to improve all services provided to every
                                customer.
                            </p>
                            </div>
                        </div>
                        <p class="text-justify mt-4 text-white">
                            <span>CIRCUIT SOLUTIONS, INC. (INC)</span>
                            is a technology company incorporated
                            with a vison to provide low-cost, high performance,electornic based
                            systems that present the highest value to our customers. Our mission
                            is to have excellence and technology pervasive in all our products and
                            to continue to innovate and respond to the ever-changing needs of
                            the market.<span v-if="aboutClick === false" v-on:click="aboutClick = !aboutClick" style="cursor:pointer;">...</span><br /><br />
                        <!-- </p>
                        <p> -->
                            <label v-if="aboutClick">In January 1996, CSI Began full operations by offering CCTV
                            Monitoring and Surveillance Systems, and Electronic Article
                            Surveillance (EAS) Systems, commonly referred to as anti-shoplifting
                            systems. It has since evolved and diversified into other product lines
                            not only for the retail market but also for the security and electronics
                            industry.<br /><br />
                        <!-- </p>
                        <p> -->
                            Over the years, CSI has continued with its rock-solid commitment to
                            market only quality products and to provide excellent customer
                            service and technical support. This combination has resulted in CSI
                            making substantial in roads in the different market the company has
                            ventured into.<br /><br />
                        <!-- </p>
                        <p> -->
                            At CSI, we greatly value our customers as they represent the collective
                            vote of confidence that their companies have given CSI. For our part,
                            CSI continually strives to improve all services provided to every
                            customer.</label>
                        </p>

                        <h3 class="text-justify mt-4">Trusted. Proven Recommended</h3>
                        <p>
                            Twenty years and counting in business consulting and technology
                            solutions, CSI has earned the respoect of top 180 business enterprises in
                            the Philippines. We build relationships on doing things right founded on
                            our strong commitment to our values and making a difference.
                        </p>

                        <h3 class="text-justify mt-4">Company DNA: Trust and Relationship</h3>
                        <p>
                            CSI is recognized for its team of highly trained and experienced engineers.
                            Since 1996, we have helped our clients grow their businesses and profits by
                            ensuring their safety, productivity, profitability and convenience. Our Key
                            Account Manager and Systems Engineers safeguard the investment of the
                            customer, and they make sure the right solution is delivered on time, and on
                            budget.
                        </p>
                      
                </b-col>

                <b-col id="right-col" sm="6" style="padding:5%">

                    <h3 v-on:click="vissionSeen = !vissionSeen" 
                        id="vision-text" 
                        class="text-center mt-4">
                        VISION
                    </h3>
                    <p v-if="vissionSeen" class="text-justify mt-4">
                        To be recognized as The Authority in cutting-edge
                        technology and solutions that are Proven, Trusted and
                        Recommended by diverse spectrum of businesses in the
                        Philippines.
                    </p>
                    
                    <h3 v-on:click="missionSeen = !missionSeen" 
                        id="mission-text" 
                        class="text-center mt-4">
                        MISSION
                    </h3>
                    <p v-if="missionSeen" class="text-justify mt-4">
                        To be the technology partner of choice by delivering
                        positive customer experience through an integrated
                        approach to providing technology solutions.
                    </p>
                    <h3 v-on:click="valuesSeen = !valuesSeen" 
                        id="values-text" 
                        class="text-center mt-4">
                        VALUES
                    </h3>
                    <img v-if="valuesSeen" id="values-hide" src="/storage/ABOUT/CIRCUIT.png" alt /> 
                    <div></div>
                    <b-col id="icons" sm="6">
                        <div>
                        <img id="icon1" src="/storage/ABOUT/icon_4.png" alt="icon1" />
                        </div>
                        <!-- <img id="icon2" src="/storage/ABOUT/ICON_2.png" alt="icon1" /> -->
                    </b-col>
                </b-col>
            </b-row>
        </b-container>
    </div>
</template>

<script>
export default {
    name: "AboutCompnent",
    data() {
        return {
            vissionSeen: false,
            missionSeen: false,
            valuesSeen: false,
            aboutClick: false
        }
    }
}
</script>

<style lang="css" scoped>

    /* .ellipsis {
        border:1px solid red;
        width:1000px;
         overflow:hidden;
    }
    .try {
        white-space:nowrap;
        -ms-text-overflow:ellipsis;
        text-overflow:ellipsis;
        width:150px;
        height:1.2em;
    } */
    #hide {
            border: solid 2px blue;
    }
    #vision-text, #mission-text, #values-text {
        cursor: pointer;
    }
    #about-us {
       height: 100%;
    }
    h3 {
        color: #FFFF0B;
    }
    h3 > span {
        color: #FFFF0B;
    }
    p {
        text-align: justify;
        color: #f2f2f2f2;
        margin-top: 2px;
        font-size: 19px;
    }
    P > span {
        color: #FFFF0B;
    }
    #right-col > h3 {
        text-decoration: underline;
    }
    #right-col > img {
        width: 75%;
    }
    #icon1 {
        position: relative;
        z-index: 2;
        width: 200% !important;
        margin-top: 20px;
    }
    #icon2 {
        position: absolute;
        z-index: 1;
        width: 100%;
        margin: 60px 0 0 175px;
    }
    
    @media only screen and (max-width: 689px) {
        #about-us {
            height: 100%;
        }
        #icons {
            /* display: none; */
            width: 50%;
        }
    }

    @media only screen and (max-width: 414px) {
        #about-us {
            height: 100% !important;
        }
        #icons {
            /* display: none; */
        }
        .col-sm-6 > h3 {
            font-size: 1rem;
        }
        .col-sm-6 > p {
            font-size: 1rem !important;
        }

    }

    @media only screen and (max-width: 375px) {
        #about-us {
            height: 100% !important;
        }
        #icons {
            /* display: none; */
        }
        .col-sm-6 > h3 {
            font-size: 1rem;
        }
        .col-sm-6 > p {
            font-size: 1rem !important;
        }

    }

    @media only screen and (max-width: 320px) {
        #about-us {
            height: 100%;
        }
        .col-sm-6 > h3 {
            font-size: 1rem;
        }
        .col-sm-6 > p {
            font-size: 1rem !important;
        }
    }
</style>