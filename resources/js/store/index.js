import Vuex from "vuex"
import Vue from "vue"
import Auth from "./modules/auth/auth"
import Career from './modules/career/career'
import Contact from './modules/contact/contact'
import Services from './modules/services/services'

// Load Vuex
Vue.use(Vuex)

// Create Store
export default new Vuex.Store({
    modules: {
        Auth,
        Career,
        Contact,
        Services
    }
})
