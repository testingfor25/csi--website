import axios from 'axios'
axios.defaults.baseURL = process.env.MIX_APP_URL;
axios.defaults.headers.post['Content-Type'] = 'application/json';

const state = {
    careers: {},
    careerlist: {},
    token: localStorage.getItem('access_token'),
}

const getters = {
    careers: state => state.careers,
    careerlist: state => state.careerlist
}

const actions = {
    async showCareers({ commit }) {
        axios.defaults.headers.common['Authorization'] = `Bearer ${state.token}`
        const response = await axios.get(`/api/career/careers`)

        commit('setCareers', response.data)
    },
    async getResultCareers({ commit }, page = 1) {
        axios.defaults.headers.common['Authorization'] = `Bearer ${state.token}`
        const response = await axios.get(`/api/career/careers?page=${page}`)

        commit('setCareers', response.data)
    },
    storeCareer({ commit }, data) {
        return new Promise((resolve, reject) => {
            let formData = new FormData();
            formData.append('job_title', data.job_title)
            formData.append('job_description', data.job_description)
            formData.append('job_image', data.job_image)
            axios.defaults.headers.post['Content-Type'] = 'multipart/form-data';
            axios.defaults.headers.common['Authorization'] = `Bearer ${state.token}`
            axios.post('/api/career/storecareer', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                    'X-CSRF-TOKEN': state.csrf_token
                }
            })
                .then(response => {
                    resolve(response)
                })
                .catch(error => {
                    reject(error)
                })
        })
    },
    updateCareer({ commit }, data) {
        return new Promise((resolve, reject) => {
            let formData = new FormData();
            formData.append('job_title', data.job_title)
            formData.append('job_description', data.job_description)
            formData.append('job_image', data.job_image)
            formData.append('status', (data.status === true ? 1 : 0))
            axios.defaults.headers.post['Content-Type'] = 'multipart/form-data';
            axios.defaults.headers.common['Authorization'] = `Bearer ${state.token}`
            axios.post(`/api/career/updatecareer/${data.id}`, formData, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                    'X-CSRF-TOKEN': state.csrf_token
                }
            })
                .then(response => {
                    resolve(response)
                })
                .catch(error => {
                    reject(error)
                })
        })
    },
    updateCareerStatus({ commit }, id) {
        return new Promise((resolve, reject) => {
            axios.defaults.headers.common['Authorization'] = `Bearer ${state.token}`
            axios.post(`/api/career/updatecareerstatus/${id}`)
                .then(response => {
                    resolve(response)
                })
                .catch(error => {
                    reject(error)
                })
        })
    },
    removeCareer({ commit }, id) {
        return new Promise((resolve, reject) => {
            axios.defaults.headers.common['Authorization'] = `Bearer ${state.token}`
            axios.post(`/api/career/deletecareer/${id}`)
                .then(response => {
                    resolve(response)
                })
                .catch(error => {
                    reject(error)
                })
        })
    },
    async showCareersList({ commit }) {
        const response = await axios.get(`/api/careerslist`)

        commit('setCareersList', response.data)
    },
    sendApplication({ commit }, data) {
        return new Promise((resolve, reject) => {
            let formData = new FormData()
            formData.append('firstname', data.firstname)
            formData.append('lastname', data.lastname)
            formData.append('email', data.email)
            formData.append('position_applying_for', data.position_applying_for)
            formData.append('file', data.file)
            const config = { headers: { 'Content-Type': 'multipart/form-data' } };
            axios.post(`/api/sendapplication`, formData, config)
                .then(response => {
                    resolve(response)
                })
                .catch(error => {
                    reject(error)
                })
        })
    }
}
const mutations = {
    setCareers: (state, careers) => (state.careers = careers),
    setCareersList: (state, careerlist) => (state.careerlist = careerlist)
}

export default {
    state,
    getters,
    actions,
    mutations
}