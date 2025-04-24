import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import About from '../views/AboutView.vue'
import contact from '../views/contact.vue'
import halaman2 from '../views/halaman2.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView,
    },
    {
      path: '/about',
      name: 'about',
      component: About,
    },
    {
      path: '/contact',
      name: 'contact',
      component: contact,
    },
    {
      path: '/halaman2',
      name: 'halaman2',
      component: halaman2,
    },
  ],
})

export default router
