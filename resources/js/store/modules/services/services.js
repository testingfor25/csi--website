import axios from 'axios'
axios.defaults.baseURL = process.env.MIX_APP_URL;
axios.defaults.headers.post['Content-Type'] = 'application/json';

const actions = {
    sendServicesEmail({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.post(`/api/sendservicesemail`, data)
                .then(response => {
                    resolve(response)
                })
                .catch(error => {
                    reject(error)
                })
        })
    }
}



export default {
    actions
}