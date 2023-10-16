import axios from 'axios'
axios.defaults.baseURL = process.env.MIX_APP_URL;
axios.defaults.headers.post['Content-Type'] = 'application/json';

const actions = {
    sendContactEmail({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.post(`/api/sendcontactemail`, data)
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