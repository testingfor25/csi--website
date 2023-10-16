<template>
    <div id="adminCareers">
        <adminNavbar v-if="user !== null && this.$route.path === '/admincareers'" />
        <b-container class="mt-4">
            <b-row>
                <b-col md="12">
                    <b-card>
                        <!-- Header -->
                        <template v-slot:header>
                            <h6 class="mb-0 text-justify">
                                <h3 class="font-weight-bold">Manage Careers</h3>
                            </h6>
                        </template>
                        <!-- ./ Header -->
                        <b-card-text>
                            <b-button class="float-left mb-4" @click="addCareer" pill>Add Career</b-button>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered">
                                    <thead class="custom-thead text-white">
                                        <tr>
                                            <th scope="col">Job Title</th>
                                            <!-- <th scope="col">Job Description</th> -->
                                            <th scope="col">Status</th>
                                            <th scope="col">Update</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody v-if="careers.data === undefined">
                                        <tr v-for="load in contentLoading" :key="load">
                                            <td>
                                                <div class="progress"></div>
                                            </td>
                                            <td>
                                                <div class="progress"></div>
                                            </td>
                                            <td>
                                                <div class="progress"></div>
                                            </td>
                                            <td>
                                                <div class="progress"></div>
                                            </td>
                                            <!-- <td>
                                                <div class="progress"></div>
                                            </td>-->
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr v-for="career in careers.data" :key="career.id">
                                            <td>{{ career.job_title }}</td>
                                            <!-- <td>
                                                <label
                                                    v-if="career.job_description.length > 12"
                                                >{{ career.job_description | substring }}</label>
                                                <label
                                                    v-if="career.job_description.length < 12"
                                                >{{ career.job_description }}</label>
                                            </td>-->
                                            <td>
                                                <toggle-button
                                                    @change="updateStatus(career.id)"
                                                    :value="(career.status === 1 ? true : false)"
                                                    :labels="{checked: 'POSTED', unchecked: 'PENDING'}"
                                                    :width="80"
                                                    style="margin-left: 20px"
                                                />
                                            </td>
                                            <td>
                                                <b-button
                                                    @click="editCareer(career)"
                                                    size="sm"
                                                    pill
                                                >Update Career</b-button>
                                            </td>
                                            <td>
                                                <b-button
                                                    variant="danger"
                                                    @dblclick="removeCareer(career)"
                                                    size="sm"
                                                    pill
                                                    v-b-tooltip.bottomleft.hover="'Double Click to Remove Career!'"
                                                >Remove Career</b-button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- No Results-->
                                <div class="text-center" v-if="this.careers.data == 0">
                                    <label>No Results found</label>
                                </div>
                            </div>
                        </b-card-text>
                        <!-- Footer -->
                        <template v-slot:footer>
                            <div class="float-left">
                                {{ (careers.next_page_url == null && careers.prev_page_url == null) ? '' : 'Total ' + careers.to }}
                                {{ (careers.next_page_url == null && careers.prev_page_url == null) ? '' : 'of ' + careers.total }}
                            </div>
                            <!-- Pagination -->
                            <pagination
                                class="float-right"
                                :data="careers"
                                @pagination-change-page="getResultCareers"
                            >
                                <span slot="prev-nav">
                                    <i class="ti-angle-left"></i> Previous
                                </span>
                                <span slot="next-nav">
                                    Next
                                    <i class="ti-angle-right"></i>
                                </span>
                            </pagination>
                            <!-- ./ Pagination -->
                        </template>
                        <!-- Footer -->
                    </b-card>
                </b-col>
            </b-row>
        </b-container>
        <!-- Career Modal -->
        <b-modal ref="career-modal" id="career-modal" size="lg" @hidden="resetModal" hide-footer>
            <template v-slot:modal-title>Add Career</template>
            <div class="d-block text-center">
                <b-form @submit.prevent="store">
                    <b-form-group
                        class="col-md-12 mt-2 text-justify"
                        label="Job Title:"
                        label-for="job_title"
                    >
                        <b-form-input
                            id="job_title"
                            :class="{ 'is-invalid' : errors.has('job_title') }"
                            v-model="form.job_title"
                            name="job_title"
                            type="text"
                            placeholder="Job Title"
                            v-validate="'required'"
                        ></b-form-input>

                        <p
                            class="text-danger bg-white text-md-left mt-2"
                            v-if="errors.has('job_title')"
                        >{{errors.first('job_title') | replace_}}</p>
                    </b-form-group>

                    <!-- <b-form-group
                        class="col-md-12 text-justify"
                        label="Job Description:"
                        label-for="job_description"
                    >
                        <b-form-textarea
                            v-model="form.job_description"
                            :class="{ 'is-invalid' : errors.has('job_description') }"
                            name="job_description"
                            id="job_description"
                            placeholder="Job Description"
                            rows="10"
                            max-rows="25"
                            v-validate="'required'"
                        ></b-form-textarea>

                        <p
                            class="text-danger bg-white text-md-left mt-2"
                            v-if="errors.has('job_description')"
                        >{{errors.first('job_description') | replace_}}</p>
                    </b-form-group>-->

                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input
                                    type="file"
                                    @change="uploadFile"
                                    class="custom-file-input"
                                    :class="{ 'is-invalid' : errors.has('job_image') }"
                                    id="job_image"
                                    name="job_image"
                                    ref="file"
                                    v-validate="'required'"
                                />
                                <label
                                    v-if="this.editmode == true"
                                    class="custom-file-label"
                                    for="job_image"
                                    id="job_image"
                                >{{ job_image_filename }}</label>
                                <label
                                    v-if="this.editmode == false"
                                    class="custom-file-label"
                                    for="kyc_form"
                                    id="job_image_filename"
                                >{{ job_image_filename}}</label>
                            </div>
                        </div>
                        <p
                            class="text-danger bg-white text-md-left mt-2 ml-4"
                            v-if="errors.has('job_image')"
                        >{{errors.first('job_image') | replace_}}</p>
                    </div>

                    <!-- <b-form-group>
                        <h6 class="text-justify custom-label-text ml-3">Upload Career File:</h6>
                        <b-form-file
                            @change="uploadFile"
                            id="job_image"
                            name="job_image"
                            class="ml-3 mb-3"
                            ref="file"
                            v-validate="'required'"
                        ></b-form-file>
                        <p
                            class="text-danger bg-white text-md-left mt-2 ml-4"
                            v-if="errors.has('job_image')"
                        >{{errors.first('job_image') | replace_}}</p>
                    </b-form-group>-->

                    <b-button class="float-right text-uppercase" type="submit" :disabled="loading">
                        {{ editmode === false ? 'Submit' : 'Update'}}
                        <span
                            class="spinner-border spinner-border-sm"
                            role="status"
                            aria-hidden="true"
                            v-if="loading"
                        ></span>
                    </b-button>
                    <!-- <b-button type="reset" variant="danger">Reset</b-button> -->
                </b-form>
            </div>
            <!-- <b-button class="mt-3" block @click="$bvModal.hide('career-modal')">Close Me</b-button> -->
        </b-modal>
        <!-- ./ Career Modal -->
    </div>
</template>

<script>
import adminNavbar from '../adminLayouts/adminNavbar.vue'
import { mapGetters, mapActions } from "vuex"
export default {
    components: {
        adminNavbar
    },
    data() {
        return {
            csrf_token: $('meta[name="csrf-token"]').attr('content'),
            user: localStorage.getItem('access_token'),
            contentLoading: 10,
            editmode: false,
            loading: false,
            form: {
                id: '',
                job_title: '',
                job_description: '',
                job_image: '',
                status: null
            },
            job_image_filename: 'Chose File...',
            edit_job_image: null
        }
    },
    computed: mapGetters(["careers"]),
    methods: {
        ...mapActions(["showCareers", "getResultCareers"]),
        store(e) {
             e.preventDefault(e)
            if (this.form.job_title === '' || this.form.job_image === '') {
                this.$validator
                .validate(
                    'job_title', this.form.job_title,
                    // 'job_description', this.form.job_description,
                    'job_image', this.form.job_image
                )
                .then(result => {
                    if (result) {
                        return
                    }
                })
                if (this.form.job_title === '') {
                    this.$validator.validate('job_title', this.form.job_title)
                }
                // if (this.form.job_description === '') {
                //     this.$validator.validate('job_description', this.form.job_description)

                // }
                 if (this.form.job_image === '') {
                    this.$validator.validate('job_image', this.form.job_image)

                }
                // this.$Progress.fail()
                this.loading = false;
                return false;
            } else {
                this.loading = true
                this.$store.dispatch((this.editmode === false ? 'storeCareer' : 'updateCareer'), this.form)
                .then(response => {
                    this.showCareers()
                    // this.editmode = false
                    this.$refs['career-modal'].hide()
                    this.form.job_title = ''
                    this.form.job_description = ''
                    this.form.job_image = ''
                    this.job_image_filename = ''
                    this.makeToast(false, (this.editmode === true ? true : false))
                    this.loading = false
                    
                })
                .catch(error => {
                    this.loading = false
                    // console.log(error)
                })
            }
        },
        addCareer() {
            this.$refs['career-modal'].show()
        },
        editCareer(data) {
            this.editmode = true
            this.$refs['career-modal'].show()
            this.form.id = data.id
            this.form.job_title = data.job_title
            this.form.job_description = data.job_description
            this.job_image_filename = data.job_image
            this.form.job_image = data.job_image
            this.form.status = (data.status === 1 ? true : false)
        },
        resetModal() {
            this.editmode = false
            this.form.job_title = ''
            this.form.job_description = ''
            this.form.job_image = ''
            this.job_image_filename = 'Chose File'
        },
        uploadFile(e) {
            // e.preventDefault()
            this.form.job_image = e.target.files[0]
            this.job_image_filename = e.target.files[0].name
            return true;
            
        },
        makeToast(append = false, editmode, remove = false) {
            this.toastCount++
            this.$bvToast.toast((editmode === true ? `Career Successfully Updated` : (editmode === true ? `Career Successfully Updated` : (remove === true ? `Career Removed` : `Career Successfully Added`))), {
            title: (editmode === true ? `Updated` : (editmode === true ? `Updated` : `Career Added`)),
            autoHideDelay: 5000,
            appendToast: append
            })
        },
        updateStatus(data) {
            this.editmode = true
            this.$store.dispatch('updateCareerStatus', data)
            .then(response => {
                this.editmode = false
                this.makeToast(false, true)
            })
            .catch(error => {
                // console.log(error)
            })
        },
        removeCareer(data) {
            this.$store.dispatch('removeCareer', data['id'])
            .then(response => {
                this.editmode = false
                this.makeToast(false, false, true)
                this.showCareers()
            })
            .catch(error => {
                // console.log(error)
            })
        }
    },
    created() {
        this.showCareers()
    },


}
</script>

<style lang="css" scoped>
    #adminCareers {
        background-color: #fff !important;
    }
    .custom-thead {
        background-color: #343A40;
    }
    .v-switch-core {
        width: 100rem !important;
    }
</style>
