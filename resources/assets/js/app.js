
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */
import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from './components/Home.vue'
import Example from './components/Example.vue'
import About from './components/About.vue'


//use Plugin
Vue.use(VueRouter)


// 2. Define route components
const Foo = { template: '<div>Faozi</div>' }
const Bar = { template: '<div>Bar</div>' }

// 3. Create the router
const router = new VueRouter({
  mode: 'history',
  base: __dirname,
  routes: [
    { path: '/', component: Home },
    { path: '/about', component: About },
    { path: '/bar', component: Bar },
    { path: '/example', component: Example }
   ]
})

// 4. Create and mount root instance.
// Make sure to inject the router.
// Route components will be rendered inside <router-view>.
new Vue({
  router,
  components : {
    Home, 
    About, 
    Example,
  },
  data : {
  } 
}).$mount('#app')
