import Vue from 'vue'
import axios from 'axios'

axios.defaults.baseURL = 'http://app-sme.test/api'

Vue.use({
    install(Vue){
        Vue.prototype.$http = axios
    }
})