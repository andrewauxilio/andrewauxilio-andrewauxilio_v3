import VueRouter from 'vue-router'

Vue.use(VueRouter)

/***********************************************
 ***************** Vue Routes ******************
 **********************************************/

let routes = [
  // Default Page
  {
    path: '/',
    component: require('./components/Particles.vue').default
  },
]

const router = new VueRouter({
  mode: 'history',
  routes, // short for `routes: routes`
  linkActiveClass: 'active'
})

const app = new Vue({
  el: '#app',
  router
})