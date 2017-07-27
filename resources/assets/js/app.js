console.log('服务端带过来的相关信息 ' , window.Laravel);
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import 'element-ui/lib/theme-default/index.css';

import './bootstrap';

import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuebreadcrumbs from 'vue-breadcrumbs';
import router from './pages/routes';
import AppComponent from './components/App.vue';
import RingLoader from 'vue-spinner/src/RingLoader.vue';
import VueMaterial from 'vue-material';
import ElementUI from 'element-ui';


Vue.use(VueRouter);
Vue.use(Vuebreadcrumbs);
Vue.use(ElementUI);
Vue.use(VueMaterial);
Vue.component('app', AppComponent);
Vue.component('ring-loader', RingLoader);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    el: '#app',
    router
});
