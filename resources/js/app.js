/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;
import VueRouter from 'vue-router';


Vue.component('admin-dropdown', require('./components/Admin/Dropdown/Index.vue').default);

Vue.component('agency-index', require('./components/Admin/Agency/Index.vue').default);
Vue.component('agency-create', require('./components/Admin/Agency/Create.vue').default);

Vue.component('users-index', require('./components/Admin/User/Index.vue').default);
Vue.component('user-create', require('./components/Admin/User/Create.vue').default);
Vue.component('user-status', require('./components/Admin/User/Status.vue').default);

Vue.component('logs-index', require('./components/Admin/Logs/Index.vue').default);
Vue.component('log-details', require('./components/Admin/Logs/Details.vue').default);

Vue.component('location-index', require('./components/Admin/Locations/Location.vue').default);
Vue.component('location-sync', require('./components/Admin/Locations/Modal/Sync.vue').default);

Vue.component('school-index', require('./components/Admin/School/Index.vue').default);
Vue.component('school-create', require('./components/Admin/School/Modal/Create.vue').default);
Vue.component('school-campus', require('./components/Admin/School/Modal/Campus.vue').default);
Vue.component('school-profile', require('./components/Admin/School/Profile.vue').default);

Vue.component('course-index', require('./components/Admin/Course/Index.vue').default);
Vue.component('course-create', require('./components/Admin/Course/Create.vue').default);

Vue.use(VueRouter)
import VueToast from 'vue-toast-notification';
Vue.use(VueToast);

import router from './Router/index';

const app = new Vue({
    data: { 
        currentUrl: window.location.origin,
        windowHeight: window.innerHeight,
        windowWidth: window.innerWidth,
    },
    
    computed : {
        height: function() {
            return this.windowHeight - 180;
        },
        width: function() {
            return this.windowWidth;
        },
        counts: function(){
            return Math.floor((this.height - 175) / 54);
        }
    },
    el: '#app',
    router,
});

// router.beforeEach((to, from, next) => {
//     app.loading = true
//     next()
// });
  
// router.afterEach(() => {
//     setTimeout(() => app.loading = false, 1000) // timeout for demo purposes
// });
