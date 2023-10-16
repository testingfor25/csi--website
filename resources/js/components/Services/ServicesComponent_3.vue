<template>
    <div id="ServicesComponent">
        <b-container class="bv-example-row">
            <b-row class="mt-4">
                <b-col>
                    <h1 class="header-text">CUSTOMER CARE</h1>
                </b-col>
            </b-row>
            <b-row class="mt-3">
                <b-col sm="6">
                    <div class="ph-logo">
                        <img src="/storage/services/CC1.png" alt fuild />
                    </div>
                </b-col>
                <b-col sm="6">
                    <div class="mt-4 ml-3 customer-care">
                        <h3 class="text-white">For Service request:</h3>
                        <h4 class="mt-4 text-white">1. Fill-up <a data-toggle="modal" id="requestForm" href="#modalRequestForm"><b>Service Request Form</b></a></h4>
                        <h3 class="mt-4 text-white">For other service-related concerns:</h3>
                        <h4 class="mt-4 text-white"><img
                            class="contact-image mx-2"
                            src="/storage/services/PHONE.png"
                            alt="contact-phone"/>0917-8906296
                        </h4>
                        <h4 class="mt-4 text-white" style="text-decoration: underline;"><img
                            class="contact-image mx-2"
                            src="/storage/services/MAIL.png"
                            alt="contact-email"/>customercaresupport@circuit-solutions.net
                        </h4>
                        <h3 class="mt-4 text-white">Office Hours</h3>
                        <h4 class="mt-4 text-white">9:00 AM - 6:00 PM (Monday to Saturday)</h4>
                    </div>
                   
                </b-col>
                
            </b-row>
        </b-container>

        <!-- Modal -->
        <div class="modal fade" id="modalRequestForm" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #1851A0;">
                        <h1 class="text-white mt-2" style="font-size: 3vh">SERVICE REQUEST FORM</h1>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <b-form @submit.prevent="send">
                        <div class="modal-body">
                            <b-row>
                                <!-- Customer Name -->
                                <b-col sm="6">
                                    <b-form-group
                                        class="col-md-12 mt-2 text-justify custom-label-text"
                                        label="Customer Name:"
                                        label-for="customer_name">

                                        <b-form-input
                                            name="customer_name"
                                            :class="{ 'is-invalid' : errors.has('customer_name') }"
                                            id="customer_name"
                                            type="text"
                                            placeholder="Customer Name"
                                            v-model="form.customer_name"
                                            v-validate="'required'">
                                        </b-form-input>

                                        <p
                                            class="text-danger bg-white text-md-left mt-2"
                                            v-if="errors.has('customer_name')">
                                            {{errors.first('customer_name') | replace_}}
                                        </p>
                                    </b-form-group>
                                </b-col>
                                <!-- Branch Name -->
                                <b-col sm="6">
                                    <b-form-group
                                        class="col-md-12 mt-2 text-justify custom-label-text"
                                        label="Branch Name:"
                                        label-for="branch_name">

                                        <b-form-input
                                            name="branch_name"
                                            :class="{ 'is-invalid' : errors.has('branch_name') }"
                                            id="branch_name"
                                            type="text"
                                            placeholder="Branch Name"
                                            v-model="form.branch_name"
                                            v-validate="'required'">
                                        </b-form-input>

                                        <p
                                            class="text-danger bg-white text-md-left mt-2"
                                            v-if="errors.has('branch_name')">
                                            {{errors.first('branch_name') | replace_}}
                                        </p>
                                    </b-form-group>
                                </b-col>
                                <!-- Complete Address -->
                                <b-col sm="12">
                                    <b-form-group
                                        class="col-md-12 mt-2 text-justify custom-label-text"
                                        label="Complete Address:"
                                        label-for="address">

                                        <b-form-input
                                            name="address"
                                            :class="{ 'is-invalid' : errors.has('address') }"
                                            id="address"
                                            type="text"
                                            placeholder="Complete Address"
                                            v-model="form.address"
                                            v-validate="'required'">
                                        </b-form-input>

                                        <p
                                            class="text-danger bg-white text-md-left mt-2"
                                            v-if="errors.has('address')">
                                            {{errors.first('address') | replace_}}
                                        </p>
                                    </b-form-group>
                                </b-col>
                                <!-- Contact Person -->
                                <b-col sm="6">
                                    <b-form-group
                                        class="col-md-12 mt-2 text-justify custom-label-text"
                                        label="Contact Person:"
                                        label-for="contact_person">

                                        <b-form-input
                                            name="contact_person"
                                            :class="{ 'is-invalid' : errors.has('contact_person') }"
                                            id="contact_person"
                                            type="text"
                                            placeholder="Contact Person"
                                            v-model="form.contact_person"
                                            v-validate="'required'">
                                        </b-form-input>

                                        <p
                                            class="text-danger bg-white text-md-left mt-2"
                                            v-if="errors.has('contact_person')">
                                            {{errors.first('contact_person') | replace_}}
                                        </p>
                                    </b-form-group>
                                </b-col>
                                <!-- Contact Number -->
                                <b-col sm="6">
                                    <b-form-group
                                        class="col-md-12 mt-2 text-justify custom-label-text"
                                        label="Contact Number:"
                                        label-for="contact_number">

                                        <b-form-input
                                            name="contact_number"
                                            :class="{ 'is-invalid' : errors.has('contact_number') }"
                                            id="contact_number"
                                            type="text"
                                            placeholder="Contact Number"
                                            v-model="form.contact_number"
                                            v-validate="'required'">
                                        </b-form-input>

                                        <p
                                            class="text-danger bg-white text-md-left mt-2"
                                            v-if="errors.has('contact_number')">
                                            {{errors.first('contact_number') | replace_}}
                                        </p>
                                    </b-form-group>
                                </b-col>
                                <!-- Email Address -->
                                <b-col sm="6">
                                    <b-form-group
                                        class="col-md-12 mt-2 text-justify custom-label-text"
                                        label="Emaill Address:"
                                        label-for="email">

                                        <b-form-input
                                            name="email"
                                            :class="{ 'is-invalid' : errors.has('email') }"
                                            id="email"
                                            type="email"
                                            placeholder="Emaill Address"
                                            v-model="form.email"
                                            v-validate="'required'">
                                        </b-form-input>

                                        <p
                                            class="text-danger bg-white text-md-left mt-2"
                                            v-if="errors.has('email')">
                                            {{errors.first('email') | replace_}}
                                        </p>
                                    </b-form-group>
                                </b-col>
                                <!-- Warranty -->
                                <b-col sm="6">
                                    <b-form-group
                                        class="col-md-12 mt-2 text-justify custom-label-text"
                                        label="Warranty:"
                                        label-for="warranty">

                                        <b-row>
                                            <b-col sm="3">
                                                <b-form-radio
                                                    name="warranty"
                                                    value="Yes"
                                                    v-model="form.warranty">
                                                    Yes
                                                </b-form-radio>
                                            </b-col>
                                            <b-col sm="3">
                                                <b-form-radio 
                                                    name="warranty" 
                                                    value="No"
                                                    v-model="form.warranty">
                                                    No
                                                </b-form-radio>
                                            </b-col>
                                        </b-row>
                                    </b-form-group>
                                </b-col>
                                <!-- Account Manager -->
                                <b-col sm="6">
                                    <b-form-group
                                        class="col-md-12 mt-2 text-justify custom-label-text"
                                        label="Account Manager:"
                                        label-for="account_manager">

                                        <b-form-input
                                            name="account_manager"
                                            :class="{ 'is-invalid' : errors.has('account_manager') }"
                                            id="account_manager"
                                            type="text"
                                            placeholder="Account Manager"
                                            v-model="form.account_manager"
                                            v-validate="'required'">
                                        </b-form-input>

                                        <p
                                            class="text-danger bg-white text-md-left mt-2"
                                            v-if="errors.has('account_manager')">
                                            {{errors.first('account_manager') | replace_}}
                                        </p>
                                    </b-form-group>
                                </b-col>
                                <!-- Product with Concern -->
                                <b-col sm="6">
                                    <b-form-group
                                        class="col-md-12 mt-2 text-justify custom-label-text"
                                        label="Product with Concern:"
                                        label-for="product_concern">

                                        <b-form-input
                                            name="product_concern"
                                            :class="{ 'is-invalid' : errors.has('product_concern') }"
                                            id="product_concern"
                                            type="text"
                                            placeholder="Product with Concern"
                                            v-model="form.product_concern"
                                            v-validate="'required'">
                                        </b-form-input>

                                        <p
                                            class="text-danger bg-white text-md-left mt-2"
                                            v-if="errors.has('product_concern')">
                                            {{errors.first('product_concern') | replace_}}
                                        </p>
                                    </b-form-group>
                                </b-col>
                                <!-- Trouble Description -->
                                <b-col sm="6">
                                    <b-form-group
                                        class="col-md-12 mt-2 text-justify custom-label-text"
                                        label="Trouble Description:"
                                        label-for="trouble_description">

                                        <b-form-input
                                            name="trouble_description"
                                            :class="{ 'is-invalid' : errors.has('trouble_description') }"
                                            id="trouble_description"
                                            type="text"
                                            placeholder="Trouble Description"
                                            v-model="form.trouble_description"
                                            v-validate="'required'">
                                        </b-form-input>

                                        <p
                                            class="text-danger bg-white text-md-left mt-2"
                                            v-if="errors.has('trouble_description')">
                                            {{errors.first('trouble_description') | replace_}}
                                        </p>
                                    </b-form-group>
                                </b-col>
                                <!-- Product Brand & Model No -->
                                <b-col sm="6">
                                    <b-row>
                                        <!-- Product Brand -->
                                        <b-col sm="6">
                                            <b-form-group
                                                class="col-md-12 mt-2 text-justify custom-label-text"
                                                label="Product Brand:"
                                                label-for="product_brand">

                                                    <b-form-input
                                                        name="product_brand"
                                                        :class="{ 'is-invalid' : errors.has('product_brand') }"
                                                        id="product_brand"
                                                        type="text"
                                                        placeholder="Product Brand"
                                                        v-model="form.product_brand"
                                                        v-validate="'required'">
                                                    </b-form-input>  
                                                    
                                                    <p
                                                        class="text-danger bg-white text-md-left mt-2"
                                                        v-if="errors.has('product_brand')">
                                                        {{errors.first('product_brand') | replace_}}
                                                    </p>    
                                            </b-form-group>
                                        </b-col>
                                        <!-- Model No. -->
                                        <b-col sm="6">
                                            <b-form-group
                                                class="col-md-12 mt-2 text-justify custom-label-text"
                                                label="Model No.:"
                                                label-for="model_no">

                                                    <b-form-input
                                                        name="model_no"
                                                        :class="{ 'is-invalid' : errors.has('model_no') }"
                                                        id="model_no"
                                                        type="text"
                                                        placeholder="Model No."
                                                        v-model="form.model_no"
                                                        v-validate="'required'">
                                                    </b-form-input>

                                                    <p
                                                        class="text-danger bg-white text-md-left mt-2"
                                                        v-if="errors.has('model_no')">
                                                        {{errors.first('model_no') | replace_}}
                                                    </p> 
                                            </b-form-group>
                                        </b-col>
                                    </b-row>
                                </b-col>
                                <!-- Other Details -->
                                <b-col sm="12">
                                    <b-form-group
                                        class="col-md-12 mt-2 text-justify custom-label-text"
                                        label="Other Details:"
                                        label-for="other_details">

                                        <b-form-textarea
                                            name="other_details"
                                            id="other_details"
                                            placeholder="Other Details"
                                            rows="3"
                                            max-rows="6"
                                            v-model="form.other_details">
                                        </b-form-textarea>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                        </div>
                        <!-- Button Submit -->
                        <div class="modal-footer">
                            <b-row class="float-right">
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
                                        v-if="captchaText">
                                        {{ captchaText }}
                                    </p>

                                <b-button
                                    :disabled="status"
                                    class="text-uppercase"
                                    type="submit">
                                    Submit
                                </b-button>
                            </b-row>
                        </div>
                    </b-form>
                </div>
            </div>
        </div>
        <!-- End Modal-->
    </div>
</template>

<script>
import VueRecaptcha from 'vue-recaptcha';
export default {
    name: "ServicesComponent_3",
    components: {
        VueRecaptcha
    },
    data() {
        return {
            captchaKey: process.env.MIX_CAPTCHA_KEY,
            captchaText: null,
            captchaStatus: false,
            status: false,
            form: {
                customer_name: null,
                branch_name: null,
                address: null,
                contact_person: null,
                contact_number: null,
                email: null,
                warranty: "No",
                account_manager: null,
                product_concern: null,
                trouble_description: null,
                product_brand: null,
                model_no: null,
                other_details: null,
                recaptchaVerified: false
            },
            
            resize: false
        }
    },
    methods: {
        makeToast(append = false) {
            this.toastCount++
            this.$bvToast.toast(`Your Service Request has been sent. Please expect an email reply or call from our Service Desk Personnel.`, {
                title: `Successfully Sent!`,
                autoHideDelay: 50000,
                appendToast: append
            })
        },
        send(e) {
            e.preventDefault()
           
            if(this.form.customer_name === null || this.form.branch_name === null || this.form.address === null ||
            this.form.contact_person === null || this.form.contact_number === null || this.form.email === null ||
            this.form.account_manager === null || this.form.product_concern === null ||
            this.form.trouble_description === null || this.form.product_brand === null || this.form.model_no === null || !this.captchaStatus) {

                if(!this.captchaStatus) {
                    this.captchaText = 'Please complete the recpatcha to submit the form';
                    this.captchaStatus = false;
                }

                 this.$validator
                .validate(
                    
                    'customer_name', this.form.customer_name,
                    'branch_name', this.form.branch_name,
                    'address', this.form.address,
                    'contact_person', this.form.contact_person,
                    'contact_number', this.form.contact_number,
                    'email', this.form.email,
                    'warranty', this.form.warranty,
                    'account_manager', this.form.account_manager,
                    'product_concern', this.form.product_concern,
                    'product_description', this.form.trouble_description,
                    'product_brand', this.form.product_brand,
                    'model_no', this.form.model_no,
                    'other_details', this.form.other_details
                )
                .then(result => {
                    if (result) {
                        return
                    }
                })

                if (this.form.customer_name === null) {
                    this.$validator.validate('customer_name', this.form.customer_name)
                }

                if (this.form.branch_name === null) {
                    this.$validator.validate('branch_name', this.form.branch_name)
                }
                
                if (this.form.address === null) {
                    this.$validator.validate('address', this.form.address)
                }

                if (this.form.contact_person === null) {
                    this.$validator.validate('contact_person', this.form.contact_person)
                }

                if (this.form.contact_number === null) {
                    this.$validator.validate('contact_number', this.form.contact_number)
                }

                if (this.form.email === null) {
                    this.$validator.validate('email', this.form.email)
                }

                if (this.form.account_manager === null) {
                    this.$validator.validate('account_manager', this.form.account_manager)
                }

                if (this.form.product_concern === null) {
                    this.$validator.validate('product_concern', this.form.product_concern)
                }

                if (this.form.trouble_description === null) {
                    this.$validator.validate('trouble_description', this.form.trouble_description)
                }

                if (this.form.product_brand === null) {
                    this.$validator.validate('product_brand', this.form.product_brand)
                }

                if (this.form.model_no === null) {
                    this.$validator.validate('model_no', this.form.model_no)
                }
                return false;
            }
            else {
                this.$store
                .dispatch("sendServicesEmail", this.form)
                .then(response => {
                    this.status = true
                    this.captchaStatus = false
                    this.makeToast()
                    this.errors.clear()
                })
                .catch(error => {
                    console.log(error)
                })
            }
            
        },
        markRecaptchaAsVerified(response) {
            this.captchaText = null;
            this.captchaStatus = true,
            this.form.recaptchaVerified = true;
        },
    }
}
</script>

<style lang="css" scoped>

.header-text {
    color:#FCF219;
    margin-top: 30px;
    margin-bottom: 30px;
    font-size: 6vh;
    text-decoration: underline;
}

ul li{
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
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.customer-care h3 {
    padding:10px;
    background-color: rgba(18, 54, 104, 0.3);
    text-align:left;
    font-size:3vh;
}
.customer-care h4 {
    text-align:left;
    font-size:2.5vh;
}

.contact-image {
    width: 40px;
    height: 40px;
}

#requestForm {
    color:white;
    text-decoration: underline;
}

button {
    border-radius: 0;
    background-color: #6B8BB4;
}
</style>