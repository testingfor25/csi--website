<template>
    <div id="contact">
        <b-container fluid class="bv-example-row">
            <b-row>
                <b-col sm="6" style="padding:5%">
                    <h2 class="mr-2 text-justify custom-text-color">CONTACT US</h2><br />
                    <div id="main-office">
                        <h3 class="mt-2 text-white text-uppercase">main office</h3>
                    </div>
                    <div id="contact-info">
                        <b-row>
                            <p class="contact-text text-white mt-2">
                                <img
                                    class="contact-icons"
                                    src="/storage/CONTACT/PHONE.png"
                                    alt="phone"
                                />
                               8635-5883/8244-1164/84037299
                            </p>
                        </b-row>
                        <b-row>
                            <p class="contact-text text-white">
                                <img class="contact-icons" src="/storage/CONTACT/FAX.png" alt="fax" />
                                8631-0530-PLDT FAX
                            </p>
                        </b-row>
                        <b-row>  
                            <p class="contact-text text-white">
                                <img
                                    class="contact-icons"
                                    src="/storage/CONTACT/MAIL.png"
                                    alt="mail"
                                />
                                info@circuit-solutions.net
                            </p>
                        </b-row>
                        <b-row>
                            <b-col md="12 mr-3" style="padding:0">
                                <!-- <p class="contact-text text-white ml-4" style="text-align: left;">
                                    <img
                                        class="contact-icons"
                                        src="/storage/CONTACT/LOCATION.png"
                                        alt="mail"
                                    />
                                    14th Floor, Belvedere Tower, San Miguel Ave. 
                                    <br /> Ortigas Center,Pasig City, Philippines, 1605
                                </p> -->
                                <b-row class="contact-text">
                                    <img class="contact-icons" src="/storage/CONTACT/LOCATION.png" alt />
                                    <div>
                                        <p class="contact-text1 text-white">14th Floor, Belvedere Tower, San Miguel Ave. 
                                            <br /> Ortigas Center,Pasig City, Philippines, 1605
                                        </p>
                                    </div>
                                </b-row>
                            </b-col>
                        </b-row>
                        <b-row class="mt-4">
                            <div id="main-office">
                                <h3 class="mt-2 text-white text-uppercase">offshore office</h3>
                            </div>
                            <b-col md="12 mr-3" style="padding:0">
                                <h4
                                    class="contact-text text-white mt-3"
                                >Circuit Solutions International HK Limited</h4>
                                <!-- <p class="contact-text text-white">
                                    <img
                                        class="contact-icons"
                                        src="/storage/CONTACT/LOCATION.png"
                                        alt="mail"
                                    />
                                    RM 2005, 20/F CME CTR 889, Cheung Sha Wan Road
                                    <br />Lai Chi Kok, Kowloon, Hong Kong
                                </p> -->
                                <b-row class="contact-text">
                                    <img class="contact-icons" src="/storage/CONTACT/LOCATION.png" alt />
                                    <div>
                                        <p class="contact-text1 text-white">RM 2005, 20/F CRE CTR 889, Cheung Sha Wan Road
                                            <br />Lai Chi Kok, Kowloon, Hong Kong
                                        </p>
                                    </div>
                                </b-row>
                            </b-col>
                        </b-row>
                    </div>
                </b-col>
                <b-col sm="6" style="padding:7%">
                    <b-row>
                        <b-col md="10" offset-md="3">
                            <div id="contact-form">
                                <!-- <label class="text-white">
                            Fields marked with an
                            <span class="text-danger">*</span> are required
                                </label>-->
                                <b-form @submit.prevent="send">
                                    <b-form-group
                                        class="col-md-12 mt-2 text-justify text-white"
                                        label="First Name:"
                                        label-for="firstname"
                                    >
                                        <b-form-input
                                            id="firstname"
                                            name="firstname"
                                            :class="{ 'is-invalid' : errors.has('firstname') }"
                                            type="text"
                                            v-model="form.firstname"
                                            v-validate="'required'"
                                            placeholder="First Name"
                                        ></b-form-input>

                                        <!-- <p
                                            class="text-danger text-md-left"
                                            v-if="errors.has('firstname')"
                                        >{{errors.first('firstname')}}</p>-->
                                    </b-form-group>

                                    <b-form-group
                                        class="col-md-12 text-justify text-white"
                                        label="Last Name:"
                                        label-for="lastname"
                                    >
                                        <b-form-input
                                            id="lastname"
                                            name="lastname"
                                            :class="{ 'is-invalid' : errors.has('lastname') }"
                                            type="text"
                                            v-validate="'required'"
                                            v-model="form.lastname"
                                            placeholder="Last Name"
                                        ></b-form-input>

                                        <!-- <p
                                            class="text-danger text-md-left"
                                            v-if="errors.has('firstname')"
                                        >{{errors.first('firstname')}}</p>-->
                                    </b-form-group>

                                    <b-form-group
                                        class="col-md-12 text-justify text-white"
                                        label="Company:"
                                        label-for="company"
                                    >
                                        <b-form-input
                                            id="company"
                                            name="company"
                                            :class="{ 'is-invalid' : errors.has('company') }"
                                            type="text"
                                            v-validate="'required'"
                                            v-model="form.company"
                                            placeholder="company"
                                        ></b-form-input>
                                        <!-- 
                                        <p
                                            class="text-danger text-md-left"
                                            v-if="errors.has('firstname')"
                                        >{{errors.first('firstname')}}</p>-->
                                    </b-form-group>

                                    <b-form-group
                                        class="col-md-12 text-justify text-white"
                                        label="Position:"
                                        label-for="position"
                                    >
                                        <b-form-input
                                            id="position"
                                            name="position"
                                            :class="{ 'is-invalid' : errors.has('position') }"
                                            type="text"
                                            v-validate="'required'"
                                            v-model="form.position"
                                            placeholder="Position"
                                        ></b-form-input>

                                        <!-- <p
                                            class="text-danger text-md-left"
                                            v-if="errors.has('position')"
                                        >{{errors.first('position')}}</p>-->
                                    </b-form-group>

                                    <b-form-group
                                        class="col-md-12 text-justify text-white"
                                        label="Contact Number:"
                                        label-for="contact-number"
                                    >
                                        <b-form-input
                                            id="contact-number"
                                            name="contact_number"
                                            :class="{ 'is-invalid' : errors.has('contact_number') }"
                                            type="text"
                                            v-validate="'required'"
                                            v-model="form.contact_number"
                                            placeholder="Contact Number"
                                        ></b-form-input>

                                        <!-- <p
                                            class="text-danger text-md-left"
                                            v-if="errors.has('contact_number')"
                                        >{{errors.first('contact_number') | replace_}}</p>-->
                                    </b-form-group>

                                    <b-form-group
                                        class="col-md-12 text-justify text-white"
                                        label="Email:"
                                        label-for="email"
                                    >
                                        <b-form-input
                                            id="email"
                                            name="email"
                                            :class="{ 'is-invalid' : errors.has('email') }"
                                            type="email"
                                            v-validate="'required'"
                                            v-model="form.email"
                                            placeholder="Email"
                                        ></b-form-input>

                                        <!-- <p
                                            class="text-danger text-md-left"
                                            v-if="errors.has('email')"
                                        >{{errors.first('email')}}</p>-->
                                    </b-form-group>

                                    <b-form-group
                                        class="col-md-12 text-justify text-white"
                                        label="Message:"
                                        label-for="message"
                                    >
                                        <b-form-textarea
                                            id="message"
                                            name="message"
                                            :class="{ 'is-invalid' : errors.has('message') }"
                                            placeholder="Message"
                                            rows="3"
                                            max-rows="6"
                                            v-validate="'required'"
                                            v-model="form.message"
                                        ></b-form-textarea>

                                        <!-- <p
                                            class="text-danger text-md-left"
                                            v-if="errors.has('message')"
                                        >{{errors.first('message')}}</p>-->
                                    </b-form-group>

                                 <b-form-group
                                    class="col-md-12 text-justify text-white">

                                    <vue-recaptcha
                                        @verify="markRecaptchaAsVerified"
                                        :sitekey="`${captchaKey}`"
                                        data-type="image"
                                        :loadRecaptchaScript="true"
                                        style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"
                                    ></vue-recaptcha>

                                    <p
                                        class="text-danger text-md-left"
                                        v-if="captchaText"
                                    >{{ captchaText }}</p>

                                    <b-button :disabled="status" class="float-right" type="submit">
                                        SEND
                                        <span
                                            class="spinner-border spinner-border-sm"
                                            role="status"
                                            aria-hidden="true"
                                            v-if="loading"
                                        ></span>
                                    </b-button>
                                   
                                    <!-- <b-button type="reset" variant="danger">Reset</b-button> -->
                                    </b-form-group>
                                </b-form>
                            </div>
                        </b-col>
                    </b-row>
                </b-col>
            </b-row>
        </b-container>
    </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex"
import VueRecaptcha from 'vue-recaptcha';
export default {
     components: {
        VueRecaptcha
    },
    data() {
        return {
            captchaKey: process.env.MIX_CAPTCHA_KEY,
            captchaText: null,
            captchaStatus: false,
            status: false,
            loading: false,
            form: {
                firstname: null,
                lastname: null,
                company: null,
                position: null,
                contact_number: null,
                email: null,
                message: null,
                recaptchaVerified: false
            }
        }
    },
    methods: {
        markRecaptchaAsVerified(response) {
            this.captchaText = null;
            this.captchaStatus = true
            this.form.recaptchaVerified = true;
            this.status = false
        },
        makeToast(append = false) {
            this.toastCount++
            this.$bvToast.toast(`Successfully Sent inquiries!`, {
                title: `Successfully Sent!`,
                autoHideDelay: 50000,
                appendToast: append
            })
        },
        send(e)  {
            e.preventDefault()
            if (this.form.firstname === null || this.form.lastname === null || 
            this.form.company === null || this.form.position === null ||
            this.form.contact_number === null || this.form.contact_number === null ||
            this.form.email === null || this.form.message === null || !this.captchaStatus) {
                if(!this.captchaStatus) {
                    this.captchaStatus = false
                    this.captchaText = 'Please complete the recpatcha to submit the form';
                }
                this.$validator
                .validate(
                    'firstname', this.form.firstname,
                    'lastname', this.form.lastname,
                    'company', this.form.company,
                    'position', this.form.position,
                    'contact_number', this.form.contact_number,
                    'email', this.form.email,
                    'message', this.form.message
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
                  if (this.form.company === null) {
                    this.$validator.validate('company', this.form.company)
                }
                if (this.form.position === null) {
                    this.$validator.validate('position', this.form.position)
                }
                if (this.form.contact_number === null) {
                    this.$validator.validate('contact_number', this.form.contact_number)
                }
                if (this.form.email === null) {
                    this.$validator.validate('email', this.form.email)
                }
                if (this.form.message === null) {
                    this.$validator.validate('message', this.form.message)
                }
                this.loading = false
                return false;
            } else {
                this.loading = true
                this.$store
                .dispatch("sendContactEmail", this.form)
                .then(response => {
                    this.status = true
                    this.captchaStatus = false
                    this.form.firstname = null
                    this.form.lastname = null
                    this.form.company = null
                    this.form.position = null
                    this.form.contact_number = null
                    this.form.email = null
                    this.form.message = null
                    this.form.recaptchaVerified = false
                    this.makeToast()
                    this.errors.clear()
                    this.loading = false
                })
                .catch(error => {
                    // console.log(error)
                    this.loading = false
                })
            }
        }
    }
}
</script>

<style lang="css" scoped>
    #contact {
        height: 100%;
    }
    .contact-icons {
        width: 55px;
        height: 55px;
    }
    .col-sm-6 > h2 {
        margin: 65px 0 0 34px;
        color: #f2f2f2f2;
    }
    .contact-text {
        font-size: 23px;
        color: #E8F1FA;
        text-align: left !important;
        margin: 0 0 0 50px;
    }
    .contact-text1 {
        font-size: 23px;
        color: #E8F1FA;
        text-align: left !important;
    }
    #main-office {
        background-color: #21559E;
        width: 45%;
        padding: 5px;
        margin-left: 45px;
    }
    #contact-form {
        margin-top: 65px;
        /* padding-top: 10px; */
        padding: 25px;
        background-color: #1851A0;
    }
    button {
        border-radius: 0;
        background-color: #6B8BB4;
    }

    #rc-imageselect {
       transform:scale(0.77);
       -webkit-transform:scale(0.77);
       transform-origin:0 0;
       -webkit-transform-origin:0 0;
    }

    /* Mobile */
    @media only screen and (max-width: 375px) {
        #contact {
            height: 100%;
        }
        .contact-text {
            font-size: 16px;
        }
        .contact-text1 {
            font-size: 16px;
        }
        .contact-icons {
            width: 32px;
            height: 32px;
        }
    }

    @media only screen and (max-width: 689px) {
        #contact {
            height: 100%;
        }
        .contact-text {
            font-size: 16px;
        }
        .contact-text1 {
            font-size: 16px;
        }
        .contact-icons {
            width: 32px;
            height: 32px;
        }
    }
    /* Ipad */
    @media only screen and (max-width: 768px) {
        #contact {
            height: 100%;
        }
        .contact-text {
            font-size: 12px;
        }
        .contact-text1 {
            font-size: 12px;
        }
        .contact-icons {
            width: 32px;
            height: 32px;
        }
    }

    @media screen and (max-width: 320px){
        #rc-imageselect, .g-recaptcha {
            transform:scale(0.77);
            -webkit-transform:scale(0.77);
            transform-origin:0 0;
            -webkit-transform-origin:0 0;
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