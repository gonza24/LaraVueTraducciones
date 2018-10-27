
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

Vue.component('example-component', require('./components/ExampleComponent.vue'));

import VueInternationalization from 'vue-i18n';
import Locale from './vue-i18n-locales.generated';

window.Vue.use(VueInternationalization);

const i18n = new VueInternationalization({
    locale: 'es',
    messages: Locale
});

const app = new Vue({
    el: '#app',
    i18n
})
