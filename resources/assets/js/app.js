
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('form-actions', require('./components/FormActions.vue'));

Vue.component('client-list', require('./components/clients/ClientList.vue'));
Vue.component('client-view', require('./components/clients/ClientView.vue'));
Vue.component('client-basic-info', require('./components/clients/ClientBasicInfo.vue'));
Vue.component('client-address-list', require('./components/clients/ClientAddressList.vue'));
Vue.component('client-address', require('./components/clients/ClientAddress.vue'));
Vue.component('client-custom-fields', require('./components/clients/ClientCustomFields.vue'));

const app = new Vue({
    el: '#app'
});
