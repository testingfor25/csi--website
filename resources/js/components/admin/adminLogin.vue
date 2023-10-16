<template>
    <div id="adminLogin" v-if="user === null">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card card-outline" id="login-form">
                        <div class="card-header text-center">
                            <img
                                src="/storage/Circuit real LOGO (2450 x543-24.9).png"
                                class="card-img-top img-fluid"
                                alt="csi-logo"
                                style="width: 60%;"
                            />
                        </div>
                        <div class="card-body">
                            <form @submit.prevent="login">
                                <div class="form-group">
                                    <input
                                        name="username"
                                        id="username"
                                        type="text"
                                        class="custom-input"
                                        placeholder="Username"
                                        v-model="loginForm.username"
                                        v-validate="'required'"
                                    />
                                    <p
                                        class="text-danger bg-white text-md-left"
                                        v-if="errors.has('username')"
                                    >{{errors.first('username')}}</p>
                                </div>
                                <div class="form-group">
                                    <input
                                        name="password"
                                        class="custom-input"
                                        placeholder="Password"
                                        v-model="loginForm.password"
                                        id="password"
                                        type="password"
                                        v-validate="'required'"
                                    />
                                    <p
                                        class="text-danger bg-white text-md-left"
                                        v-if="errors.has('password')"
                                    >{{errors.first('password')}}</p>
                                </div>
                                <p class="text-danger">{{ error }}</p>
                                <button
                                    type="submit"
                                    class="btn btn-primary btn-block"
                                    :disabled="loading"
                                >
                                    Login
                                    <i class="fa fa-sign-in-alt" :hidden="loading"></i>
                                    <span
                                        class="spinner-border spinner-border-sm"
                                        role="status"
                                        aria-hidden="true"
                                        v-if="loading"
                                    ></span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            loading: false,
            loginForm: {
                username: null,
                password: null
            },
            app_url: process.env.MIX_APP_URL,
            error: null,
            user: localStorage.getItem('access_token')
        };
    },
    methods: {
        login(e) {
            e.preventDefault(e)
            if (this.loginForm.username === null || this.loginForm.password === null) {
                this.$validator
                .validate(
                    'username', this.loginForm.username,
                    'password', this.loginForm.password
                )
                .then(result => {
                    if (result) {
                        return
                    }
                })
                if (this.loginForm.username === null) {
                    this.$validator.validate('username', this.loginForm.username)
                }
                if (this.loginForm.password === null) {
                    this.$validator.validate('password', this.loginForm.password)

                }
                // this.$Progress.fail()
                this.loading = false;
                return false;
            } else {
                this.loading = true
                this.$store
                .dispatch("login", this.loginForm)
                .then(response => {
                    if (response.data.status === true &&
                        response.data.data.access_token !== "") {
                        localStorage.setItem("access_token", response.data.data.access_token);
                        localStorage.setItem('username', this.loginForm.username)
                        location.href = '/admindashboard'
                    }
                    if (response.data.status === 401 ||
                        response.data.status === 400) {
                        this.error = response.data.data.error_description;
                    }
                    this.loading = false
                    // console.log(response);
                })
                .catch(error => {
                    this.loading = false
                    // console.log(JSON.stringify(error));
                });
            }

        }
    },
    beforeCreate() {
        if(localStorage.getItem('access_token')) {
            // this.$router.push('/admindashboard')
            window.location.href = '/admindashboard'
        }
    }
};
</script>

<style lang="css" scoped>
#adminLogin {
    height: 100vh;
    background-color: #2c3338;
    background-repeat: no-repeat;
    background-size: cover;
}
#login-form {
    margin-top: 50%;
    width: 100%;
}
.custom-input {
    background-image: none;
    background: #f2f2f2;
    border: 0;
    color: inherit;
    font: inherit;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
}
.custom-icon {
    border: 0;
    padding-left: 5px;
    background: #f2f2f2;
    background-size: 100px;
}
</style>
