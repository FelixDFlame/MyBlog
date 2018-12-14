
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

// $("example-component:nth-child(2)").css("background-color", "yellow");


Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('myform', require('./components/loginForm.vue'));
Vue.component('example-for', require('./components/ExampleFor.vue'));
Vue.component('callingapi', require('./components/CallingAPI.vue'));

const app = new Vue({
    el: '#app',
    data () {
    return {
      info: null
    }
  },
  mounted () {
    axios
      .get('https://api.coindesk.com/v1/bpi/currentprice.json')
      .then(response => (this.info = response))
  }
});
