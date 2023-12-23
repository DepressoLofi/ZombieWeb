import { createRouter, createWebHistory } from "vue-router";
import Login from "../views/auth/Login.vue";
import NotFound from "../views/NotFound.vue";
import Home from "../views/Home.vue";
import Admin from "@/layout/master.vue";
import AdminIndex from "@/views/admin/Index.vue";
import Product from '@/views/admin/Product.vue';
import User from '@/views/admin/User.vue';


const routes = [
    {
        path: '/login',
        name: 'Login',
        component: Login
    },
    {
        path: '/:pathMatch(.*)',
        name: 'NotFound',
        component: NotFound
    },
    {
        path: '/',
        name: 'home',
        component: Home
    },

    {
        name: 'Admin',
        path: '/admin',
        component: Admin,
        redirect: '/admin/dashboard',
        children: [
            {
                name: 'dashboard',
                path: 'dashboard',
                component: AdminIndex,
            },
            {
                name: 'product',
                path: 'product',
                component: Product,

            },
            {
                name: 'user',
                path: 'user',
                component: User,
            }
        ]
    },




]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router;
