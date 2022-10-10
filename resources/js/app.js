import '../configs/api.js'
import Vue from 'vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

// Import Bootstrap and BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
 
require('./bootstrap');

window.Vue = require('vue').default;




/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('menu-topo', require('./components/MenuTopo.vue').default);
Vue.component('pagina', require('./components/Pagina.vue').default);
Vue.component('tabela-lista', require('./components/TabelaLista.vue').default);
Vue.component('login', require('./components/Login.vue').default);
Vue.component('modal-form-trabalhador', require('./components/ModalFormTrabalhador.vue').default);
Vue.component('icon-de-user', require('./components/IconUser.vue').default);
Vue.component('form-contacto', require('./components/FormContacto.vue').default);
Vue.component('form-contacto-right', require('./components/FormContactoRight.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
