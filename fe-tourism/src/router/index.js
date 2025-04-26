import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/Home.vue'
import Top_Destination from '../views/Top_Destination.vue'
import Travel_stories from '../views/Travel_stories.vue'
import Help_center from '../views/Help_center.vue'
import Login from '../views/login.vue'
import Dashboard from '../views/admin/Dashboard.vue'
import halaman1 from '@/views/admin/halaman1.vue'
import halaman2 from '@/views/admin/halaman2.vue'
import Cookies from 'js-cookie'
import axios from 'axios'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView,
    },
    {
      path: '/Top',
      name: 'top',
      component: Top_Destination,
    },
    {
      path: '/Stories',
      name: 'stories',
      component: Travel_stories,
    },
    {
      path: '/Help',
      name: 'Help',
      component: Help_center,
    },
    {
      path: '/login',
      name: 'Login',
      component: Login,
      meta: { hideLayout: true },
    },
    {
      path: '/dashboard',
      name: 'dashboard',
      component: Dashboard,
      meta: { requiresAuth: true },
      meta: { hideLayout: true },
    },
    {
      path: '/halaman1',
      name: 'halaman1',
      component: halaman1,
      meta: { hideLayout: true },
    },
    {
      path: '/halaman2',
      name: 'halaman2',
      component: halaman2,
      meta: { hideLayout: true },
    },
  ],
})

export default router
