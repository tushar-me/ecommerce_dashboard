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
      path: '/verify',
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
      path: '/products-detail/:slug',
      name: 'Detail',
      component: () => import('@/pages/Products/Detail.vue')
    },
    {
      path: '/category',
      name: 'Category',
      component: () => import('@/pages/Category/Index.vue')
    },
      {
      path: '/brand',
      name: 'Brand',
      component: () => import('@/pages/Brand/Index.vue')
    },
      {
      path: '/stock',
      name: 'Stock',
      component: () => import('@/pages/Stock/Index.vue')
    },
    {
      path: '/customers',
      name: 'Customers',
      component: () => import('@/pages/Customers/Index.vue')
    },
      {
      path: '/manager',
      name: 'Manager',
      component: () => import('@/pages/Manager/Index.vue')
    },
      {
      path: '/order',
      name: 'Order',
      component: () => import('@/pages/Order/Index.vue')
    },
      {
      path: '/shipping',
      name: 'Shipping',
      component: () => import('@/pages/Shipping/Index.vue')
    },
      {
      path: '/setting',
      name: 'Setting',
      component: () => import('@/pages/Setting/Index.vue')
    },
      {
      path: '/slider',
      name: 'Slider',
      component: () => import('@/pages/Slider/Index.vue')
    },
      {
      path: '/advertise',
      name: 'Advertise',
      component: () => import('@/pages/Advertise/Index.vue')
    },
      {
      path: '/profile',
      name: 'Profile',
      component: () => import('@/pages/Profile/Index.vue')
    },
  ]
})

export default router
