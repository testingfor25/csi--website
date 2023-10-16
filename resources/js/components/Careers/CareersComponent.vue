<template>
    <div id="careers">
        <!-- <b-container> -->
        <b-row class="mt-4" style="margin: 0 !important; margin-top: 40px !important;">
            <b-col sm="4" offset="1">
                <h3 class="text-justify custom-text-color">CAREERS</h3>
                <h4 class="text-justify text-white">Be part of our Team!</h4>
                <p class="text-justify text-white">
                    We are looking for qualified and competent
                    applicants who are willing to be part of our
                    dynamic and growing organizations
                </p>
                <div id="available-position">
                    <h3 class="text-justify text-white p-2">Available Position</h3>
                </div>
                <ul>
                    <li v-for="(career, index) in careerlist" :key="career.id">
                        <h4 @click="test(index)">{{ career.job_title }}</h4>
                    </li>
                </ul>
            </b-col>
            <b-col sm="6">
                <b-col>
                    <b-carousel
                        id="carousel-1"
                        :interval="40000"
                        controls
                        indicators
                        background="#ababab"
                        img-width="1024"
                        img-height="480"
                        style="text-shadow: 1px 1px 2px #333;"
                    >
                        <!-- Text slides with image -->
                        <!-- <b-carousel-slide
                            class="img-fluid"
                            v-for="career in careerlist"
                            :key="career.id"
                            :caption="`${career.job_title}`"
                            :text="`${career.job_description}`"
                            :img-src="`${career.job_image}`"
                            style="background-position:center;height: 490px;"
                        ></b-carousel-slide>-->
                        <b-carousel-slide
                            class="img-fluid"
                            v-for="career in careerlist"
                            :key="career.id"
                            :img-src="`${career.job_image}`"
                            style="background-position:center;height: 490px;"
                        ></b-carousel-slide>
                    </b-carousel>

                    <b-col sm="6" offset-sm="3">
                        <!-- Careers Application Form -->
                        <div class="mt-4 mb-3" id="application-form">
                            <b-card header-tag="header">
                                <template v-slot:header>
                                    <p class="mb-0 text-white">
                                        Interested Applicants may fill up the form below
                                        and upload your latest Curriculum Vitae (CV):
                                    </p>
                                </template>
                                <b-form @submit.prevent="send">
                                    <b-form-group
                                        class="col-md-12 mt-2 text-justify custom-label-text"
                                        label="First Name:"
                                        label-for="firstname"
                                    >
                                        <b-form-input
                                            name="firstname"
                                            :class="{ 'is-invalid' : errors.has('firstname') }"
                                            id="firstname"
                                            type="text"
                                            placeholder="First Name"
                                            v-model="form.firstname"
                                            v-validate="'required'"
                                        ></b-form-input>

                                        <p
                                            class="text-danger bg-white text-md-left mt-2"
                                            v-if="errors.has('firstname')"
                                        >{{errors.first('firstname') | replace_}}</p>
                                    </b-form-group>

                                    <b-form-group
                                        class="col-md-12 text-justify custom-label-text"
                                        label="Last Name:"
                                        label-for="lastname"
                                    >
                                        <b-form-input
                                            name="lastname"
                                            :class="{ 'is-invalid' : errors.has('lastname') }"
                                            id="lastname"
                                            type="text"
                                            placeholder="Last Name"
                                            v-model="form.lastname"
                                            v-validate="'required'"
                                        ></b-form-input>

                                        <p
                                            class="text-danger bg-white text-md-left mt-2"
                                            v-if="errors.has('lastname')"
                                        >{{errors.first('lastname') | replace_}}</p>
                                    </b-form-group>

                                    <b-form-group
                                        class="col-md-12 text-justify custom-label-text"
                                        label="Position Applying For:"
                                        label-for="position"
                                    >
                                        <b-form-input
                                            name="position_applying_for"
                                            :class="{ 'is-invalid' : errors.has('position_applying_for') }"
                                            id="position-applying-for"
                                            type="text"
                                            placeholder="Position Appyling For"
                                            v-model="form.position_applying_for"
                                            v-validate="'required'"
                                        ></b-form-input>

                                        <p
                                            class="text-danger bg-white text-md-left mt-2"
                                            v-if="errors.has('position_applying_for')"
                                        >{{errors.first('position_applying_for') | replace_ | replace_}}</p>
                                    </b-form-group>

                                    <!-- Curriculum Vitae -->
                                    <!-- <h6
                                            class="text-justify custom-label-text ml-3"
                                    >Upload Your CV here:</h6>-->
                                    <b-form-group
                                        class="col-md-12 text-justify custom-label-text"
                                        label="Upload Your CV here:"
                                        label-for="file"
                                    >
                                        <b-form-file
                                            name="file"
                                            :class="{ 'is-invalid' : errors.has('file') }"
                                            type="file"
                                            class="ml-3 mb-3"
                                            id="file"
                                            ref="file"
                                            plain
                                            v-model="form.file"
                                            v-validate="'required'"
                                        ></b-form-file>

                                        <p
                                            class="text-danger bg-white text-md-left mt-2"
                                            v-if="errors.has('file')"
                                        >{{errors.first('file') | replace_}}</p>
                                    </b-form-group>

                                    <!-- <div class="input-group mb-3">
                                            <div class="custom-file">
                                                <input
                                                    type="file"
                                                    @change="uploadCv"
                                                    class="custom-file-input"
                                                    id="fileCv"
                                                    ref="file"
                                                />
                                                <label
                                                    class="custom-file-label"
                                                    for="form_file"
                                                    id="form_file"
                                                >{{ form.kyc_form }}</label>
                                            </div>
                                    </div>-->

                                    <!-- <div
                                            class="g-recaptcha"
                                            :data-sitekey="`${captchaKey}`"
                                            data-type="image"
                                    ></div>-->
                                    <vue-recaptcha
                                        v-if="!resize"
                                        @verify="markRecaptchaAsVerified"
                                        :sitekey="`${captchaKey}`"
                                        data-type="image"
                                        :loadRecaptchaScript="true"
                                        style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"
                                    ></vue-recaptcha>

                                    <vue-recaptcha
                                        v-if="resize"
                                        @verify="markRecaptchaAsVerified"
                                        :sitekey="`${captchaKey}`"
                                        data-type="image"
                                        :loadRecaptchaScript="true"
                                        style="transform:scale(0.66);-webkit-transform:scale(0.66);transform-origin:0 0;-webkit-transform-origin:0 0;"
                                    ></vue-recaptcha>

                                    <p
                                        class="text-danger bg-white text-md-left mt-2"
                                        v-if="captchaText"
                                    >{{ captchaText }}</p>

                                    <b-button
                                        :disabled="loading"
                                        class="float-right text-uppercase"
                                        type="submit"
                                    >
                                        Submit
                                        <span
                                            class="spinner-border spinner-border-sm"
                                            role="status"
                                            aria-hidden="true"
                                            v-if="loading"
                                        ></span>
                                    </b-button>
                                    <!-- <b-button type="reset" variant="danger">Reset</b-button> -->
                                </b-form>
                            </b-card>
                        </div>
                    </b-col>
                </b-col>
            </b-col>
        </b-row>
        <!-- </b-container> -->
    </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex"
import VueRecaptcha from 'vue-recaptcha';
export default {
    components: {
        VueRecaptcha
    },
    data(){
        return {
            captchaKey: process.env.MIX_CAPTCHA_KEY,
            captchaText: null,
            captchaStatus: false,
            status: false,
            loading: false,
            form: {
                firstname: null,
                lastname: null,
                email: null,
                position_applying_for: null,
                file: null,
                recaptchaVerified: false
            },
            resize: false
        }
    },
    computed: mapGetters(["careerlist"]),
    methods: {
        ...mapActions(["showCareersList"]),
        test(index) {
            $('.carousel').carousel(index)
        },
        makeToast(append = false) {
            this.toastCount++
            this.$bvToast.toast(`Job Apllication Successfully Sent!`, {
            title: `Successfully Sent!`,
            autoHideDelay: 50000,
            appendToast: append
            })
        },
        uploadCv(e) {
            e.preventDefault()
            this.form.fileCv = this.$refs.file.files[0]
            console.log(e.target.files[0])
            return true
        },
        send(e) {
            e.preventDefault()
            if (this.form.firstname === null || this.form.lastname === null || 
            this.form.position_applying_for === null || this.form.file === null || !this.captchaStatus) {
                if(!this.captchaStatus) {
                    this.captchaStatus = false
                    this.captchaText = 'Please complete the recpatcha to submit the form';
                }
                this.$validator
                .validate(
                    'firstname', this.form.firstname,
                    'lastname', this.form.lastname,
                    'position_applying_for', this.form.position_applying_for,
                    'file', this.form.file
                )
                .then(result => {
                    if (result) {
                        return
                    }
                })
                if (this.form.firstname === null) {
                    this.$validator.validate('firstname', this.form.firstname)
                }
                if (this.form.lastname === null) {
                    this.$validator.validate('lastname', this.form.lastname)

                }
                if (this.form.position_applying_for === null) {
                    this.$validator.validate('position_applying_for', this.form.position_applying_for)

                }
                if (this.form.file === null) {
                    this.$validator.validate('file', this.form.file)

                }
                return false;
            } else {
                this.loading = true
                this.$store
                .dispatch("sendApplication", this.form)
                .then(response => {
                    this.status = true
                    this.captchaStatus = false
                    this.makeToast()
                    this.form.firstname = null
                    this.form.lastname = null
                    this.form.email = null
                    this.form.position_applying_for = null
                    this.form.file = null
                    this.form.recaptchaVerified = false
                    this.errors.clear()
                    this.loading = false
                })
                .catch(error => {
                    // console.log(error)
                    this.loading = false
                })
            }

        },
        markRecaptchaAsVerified(response) {
            this.captchaText = null;
            this.captchaStatus = true
            this.form.recaptchaVerified = true;
        },
        onResize() {
            if (window.innerWidth == 320) {
                this.resize = true
            } 
        }
    },
    created() {
        window.addEventListener('resize', this.onResize)
        this.showCareersList()
    },
    beforeDestroy() {
        window.removeEventListener('resize', this.onResize)
    },
}
</script>

<style lang="css" scoped>
    #careers {
        /* height: 87.9vh; */
        height: 100%;
        margin: 0 !important;
    }
    .col-sm-6 > h3 {
        margin-top: 50px;
    }
    #available-position {
        background-color: #21559E;
        width: 45%;
    }
    ul > li {
        list-style-type: none;
        text-align: justify;
        color: #f2f2f2
    }
    ul > li > h4:hover {
        color: #E6B02A;
        cursor: pointer;
        font-size: 1.9rem;
    }

    .card-header {
        margin: -1px !important;
        background-color: #1851A0;
    }
    button {
        border-radius: 0;
        background-color: #6B8BB4;
    }
    .custom-label-text {
        font-weight: 1.2rem;
        font-size: 16px;
        color: #1851A0;
    }
    #rc-imageselect {
       transform:scale(0.77);
       -webkit-transform:scale(0.77);
       transform-origin:0 0;
       -webkit-transform-origin:0 0;
    }
    @media only screen and (max-width: 375px) {
        #careers {
            height: 100%;
        }
    }

    @media only screen and (max-width: 689px) {
        #careers {
            height: 100%;
        }
    }
    @media screen and (max-width: 320px){
        #rc-imageselect, .g-recaptcha {
            transform:scale(0.77);
            -webkit-transform:scale(0.77);
            transform-origin:0 0;
            -webkit-transform-origin:0 0;
        }
        ul > li > h4 {
            font-size: 1rem;
        }
    }

    @media screen and (max-height: 575px){
        #rc-imageselect, .g-recaptcha {
            transform:scale(0.77);
            -webkit-transform:scale(0.77);
            transform-origin:0 0;
            -webkit-transform-origin:0 0;
        }
    }
</style>