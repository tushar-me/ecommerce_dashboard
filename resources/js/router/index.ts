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
      name: 'Dashboard',
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
      path: '/create-product',
      name: 'CreateProduct',
      component: () => import('@/pages/Products/Add.vue')
    },
    {
      path: '/edit-product',
      name: 'EditProduct',
      component: () => import('@/pages/Products/Edit.vue')
    },
      {
      path: '/product-detail/:slug',
      name: 'Detail',
      component: () => import('@/pages/Products/Detail.vue')
    },
    {
      path: '/category',
      name: 'Category',
      component: () => import('@/pages/Category/Index.vue')
    },
    {
      path: '/create-category',
      name: 'CreateCategory',
      component: () => import('@/pages/Category/Add.vue')

    },
    {
      path: '/edit-category',
      name: 'EditCategory',
      component: () => import('@/pages/Category/Edit.vue')

    },
    {
      path: '/brand',
      name: 'Brand',
      component: () => import('@/pages/Brand/Index.vue')
    },
    {
      path: '/create-brand',
      name: 'CreateBrand',
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
      path: '/create-customer',
      name: 'CreateCustomer',
      component: () => import('@/pages/Customers/Add.vue')
    },
    {
      path: '/edit-customer',
      name: 'EditCstomer',
      component: () => import('@/pages/Customers/Edit.vue')
    },
      {
      path: '/manager',
      name: 'Manager',
      component: () => import('@/pages/Manager/Index.vue')
    },
    {
      path: '/create-manager',
      name: 'CreateManager',
      component: () => import('@/pages/Manager/Add.vue')
    },
    {
      path: '/edit-manager',
      name: 'EditManager',
      component: () => import('@/pages/Manager/Edit.vue')
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
      path: '/create-slider',
      name: 'CreateSlider',
      component: () => import('@/pages/Slider/Add.vue')
    },
    {
      path: '/edit-slider',
      name: 'EditSlider',
      component: () => import('@/pages/Slider/Edit.vue')
    },
      {
      path: '/advertise',
      name: 'Advertise',
      component: () => import('@/pages/Advertise/Index.vue')
    },
    {
      path: '/create-advertise',
      name: 'CreateAdvertise',
      component: () => import('@/pages/Advertise/Add.vue')
    },
    {
      path: '/edit-advertise',
      name: 'EditAdvertise',
      component: () => import('@/pages/Advertise/Edit.vue')
    },
      {
      path: '/profile',
      name: 'Profile',
      component: () => import('@/pages/Profile/Index.vue')
    },
  ]
})

export default router
