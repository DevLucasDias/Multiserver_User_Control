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

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 import 'vuejs-datatable/dist/themes/bootstrap-4.esm';
 import { VuejsDatatableFactory } from 'vuejs-datatable';
 Vue.use( VuejsDatatableFactory );

 import DataTable from "@andresouzaabreu/vue-data-table";
 import "@andresouzaabreu/vue-data-table/dist/DataTable.css";
 Vue.component("data-table", DataTable);
//  import "bootstrap/dist/css/bootstrap.min.css";

Vue.config.productionTip = false;


 Vue.component('pabxusers-component', require('./components/PabxUserComponent.vue').default);
 Vue.component('servertable-component', require('./components/ServersComponent.vue').default);



const app = new Vue({
    el: '#app',
});
