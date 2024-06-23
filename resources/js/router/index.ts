import { createRouter, createWebHistory } from 'vue-router'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'Home',
      component: () => import('@/pages/Index.vue')
    },
    {
      path: '/login',
      name: 'Login',
      component: () => import('@/pages/Auth/Login.vue')
    },
    {
      path: '/dashboard',
      name: 'dashboard',
      component: () => import('@/pages/Dashboard/Index.vue')
    },
    {
      path: '/pos',
      name: 'Pos',
      component: () => import('@/pages/Pos/Index.vue')
    },
    {
      path: '/products',
      name: 'Products',
      component: () => import('@/pages/Products/Index.vue')
    },
    {
      path: '/category',
      name: 'Category',
      component: () => import('@/pages/Category/Index.vue')
    },
    {
      path: '/customers',
      name: 'Customers',
      component: () => import('@/pages/Customers/Index.vue')
    },
  ]
})

export default router
