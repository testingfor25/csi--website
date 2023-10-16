<template>
    <div id="industries">
        <b-container class="bv-example-row">
            <!-- First Row -->
            <h1 class="mr-2 text-center text-uppercase custom-text-color">industries we serve</h1>
            <b-row id="first-row mt-2">
                <b-col sm="3">
                    <img src="/storage/INDUSTRIES WE SERVE/RETAIL.png" alt="Retail" />
                    <h4>Retail</h4>
                </b-col>
                <b-col sm="3">
                    <img src="/storage/INDUSTRIES WE SERVE/REAL ESTATE.png" alt="Real State" />
                    <h4>Real State</h4>
                </b-col>
                <b-col sm="3">
                    <img src="/storage/INDUSTRIES WE SERVE/MANUFACTURING.png" alt="Manufacturing" />
                    <h4>Manufacturing</h4>
                </b-col>
                <b-col sm="3">
                    <img src="/storage/INDUSTRIES WE SERVE/INSTITUTIONAL.png" alt="Institutional" />
                    <h4>Institutional</h4>
                </b-col>
            </b-row>
            <!-- Second Row -->
            <b-row id="second-row" class="mt-5">
                <b-col sm="3">
                    <img src="/storage/INDUSTRIES WE SERVE/HEALTHECARE.png" alt="Healthcare" />
                    <h4>Healthcare</h4>
                </b-col>
                <b-col sm="3">
                    <img src="/storage/INDUSTRIES WE SERVE/HOSPITALITY.png" alt="Hospitality" />
                    <h4>Hospital</h4>
                </b-col>
                <b-col sm="3">
                    <img
                        src="/storage/INDUSTRIES WE SERVE/TELECOMMUNICATION.png"
                        alt="Telecommunication"
                    />
                    <h4>Telecommunication</h4>
                </b-col>
                <b-col sm="3">
                    <img src="/storage/INDUSTRIES WE SERVE/POWER ENERGY.png" alt="Power and Energy" />
                    <h4>Power and Energy</h4>
                </b-col>
            </b-row>
            <!-- Third Row -->
            <b-row id="second-row" class="mt-5">
                <b-col sm="3">
                    <img
                        src="/storage/INDUSTRIES WE SERVE/SCHOOL AND UNIVERSITIES.png"
                        alt="School and Universitie"
                    />
                    <h4>School and Universities</h4>
                </b-col>
                <b-col sm="3">
                    <img src="/storage/INDUSTRIES WE SERVE/LOGISTIC.png" alt="Logistic" />
                    <h4>Logistic</h4>
                </b-col>
                <b-col sm="3">
                    <img src="/storage/INDUSTRIES WE SERVE/TRANSPORATION.png" alt="Transportation" />
                    <h4>Transportation</h4>
                </b-col>
                <b-col sm="3">
                    <img src="/storage/INDUSTRIES WE SERVE/FINANCIAL.png" alt="Financial" />
                    <h4>Financial</h4>
                </b-col>
            </b-row>
            <!-- Fourth Row -->
            <!-- <b-row id="third-row" class="mt-3">
                <b-col sm="3" offset-md="3">
                    <img src="/storage/INDUSTRIES WE SERVE/REAL ESTATE.png" alt="realstate" />
                    <h4>Real State</h4>
                </b-col>
                <b-col sm="3" offset-md="-1">
                    <img src="/storage/INDUSTRIES WE SERVE/MANUFACTURING.png" alt="manufacturing" />
                    <h4>Manufacturing</h4>
                </b-col>
            </b-row>-->

            <b-row>
                <b-col sm="12">
                    <!-- Carousel -->
                    <b-carousel
                        class="mt-2"
                        id="carousel-1"
                        v-model="slide"
                        :interval="4000"
                        controls
                        indicators
                        background="#ababab"
                        img-width="1024"
                        img-height="480"
                        style="text-shadow: 1px 1px 2px #333;"
                        @sliding-start="onSlideStart"
                        @sliding-end="onSlideEnd"
                    >
                        <!-- Text slides with image -->
                        <b-carousel-slide img-src="/storage/INDUSTRIES WE SERVE/AUTOMOTIVE_EXP.png"></b-carousel-slide>

                        <!-- Text slides with image -->
                        <b-carousel-slide img-src="/storage/INDUSTRIES WE SERVE/MEDICAL_EXP.png"></b-carousel-slide>
                    </b-carousel>
                </b-col>
            </b-row>
        </b-container>
    </div>
</template>

<script>
export default {
 data() {
      return {
        slide: 0,
        sliding: null
      }
    },
    methods: {
      onSlideStart(slide) {
        this.sliding = true
      },
      onSlideEnd(slide) {
        this.sliding = false
      }
    }
}
</script>

<style lang="css" scoped>
    #industries {
        margin-top: 75px;
        height: 100%;
    }
    img {
        width: 35%;
    }
    h4 {
        margin-top: 6px;
        color: #f2f2f2f2;
    }
    #third-row > .col-md-6 > img {
        width: 20%;
    }
    .carousel-caption {
        top: -30;
        left: 40%;
        opacity: 0.8;
        width: 80%;
        background-color: rgba(24, 81, 160);
        /* bottom: auto; */
    }
    @media only screen and (max-width: 375px) {
        #industries {
            height: 100% !important;
        }
        .technical-services {
            margin-left: auto;
            color: #f2f2f2;
            font-size: 1.2rem;
            text-align: justify;
        }
    }

    @media only screen and (max-width: 689px) {
        #industries {
            height: 100%;
        }
    }
</style>