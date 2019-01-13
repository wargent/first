import Vue from 'vue'
import Router from 'vue-router'
import Index from './views/Index.vue'
import Other from './views/Other.vue'

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'index',
      component: Index
    },
    {
      path: '/other',
      name: 'Other',
      component: Other
    }
  ]
})
