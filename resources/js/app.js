import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes'
// import index from './index'

Vue.use(VueRouter);
require('./bootstrap');
window.Vue = require('vue').default;
Vue.prototype.$userId = document.querySelector("meta[name='user_id']").getAttribute('content');


const app = new Vue({
    el: '#app',
    router: new VueRouter(routes),
});
