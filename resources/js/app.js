
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.VueResource = require('vue-resource');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data: {
        form: {
            name: null,
            price_min: null,
            price_max: null,
            bedrooms: null,
            bathrooms: null,
            storeys: null,
            garages: null
        },
        houses:[]
    },
    methods: {
        getHouses: function(){
            var url = document.getElementById('search-houses-form').action;

            this.$http.get(url, {
                params: {
                    name: this.form.name,
                    bedrooms: this.form.bedrooms,
                    bathrooms: this.form.bathrooms,
                    storeys: this.form.storeys,
                    garages: this.form.garages,
                    price_min: this.form.price_min,
                    price_max: this.form.price_max
                },
                responseType: 'json'
            }).then(function(response){
                console.log(response, response.houses);
                if (response.body.status === 'success') {
                    this.houses = response.body.houses;
                }
            });
        }
    }
})
