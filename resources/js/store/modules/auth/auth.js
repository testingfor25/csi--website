import axios from "axios";

const state = {
    app_url: process.env.MIX_APP_URL,
    token: localStorage.getItem('access_token')
};

const getters = {};

const actions = {
    login({ commit }, loginForm) {
        return new Promise((resolve, reject) => {
            axios.defaults.baseURL = state.app_url;
            axios.defaults.headers.post["Content-Type"] = "application/json";
            axios.defaults.baseURL = state.app_url;
            axios
                .post("/api/login", {
                    username: loginForm.username,
                    password: loginForm.password
                })
                .then(response => {
                    resolve(response);
                })
                .catch(error => {
                    reject(error);
                });
        });
    },
    logout({ commit }) {
        return new Promise((resolve, reject) => {
            axios.defaults.headers.common['Authorization'] = `Bearer ${state.token}`
            axios.post('/api/logout')
                .then(response => {
                    console.log(response)
                    localStorage.clear()
                    localStorage.removeItem('access_token')
                    //window.localStorage.removeItem('user');
                    location.reload();
                    window.location.href = "/";
                    localStorage.clear();
                    resolve(response)
                })
                .catch(error => {
                    localStorage.clear()
                    localStorage.removeItem('access_token')
                    console.log(error)
                    reject(error)
                })
        })
    }
};

const mutations = {};

export default {
    state,
    getters,
    actions,
    mutations
};
