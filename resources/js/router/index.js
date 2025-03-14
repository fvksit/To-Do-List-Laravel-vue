import { createRouter, createWebHistory } from 'vue-router';
import Login from '../views/Login.vue';
import Dashboard from '../views/Dashboard.vue';
import TaskList from '../views/TaskList.vue';
import TaskFormPage from '../views/TaskFormPage.vue';
import PageNotFound from '../components/PageNotFound.vue';

const routes = [
    {
        path: '/',
        name: 'login',
        component: Login,
        meta: { requiresAuth: false },
    },
    {
        path: '/dashboard',
        name: 'dashboard',
        component: Dashboard,
        meta: { requiresAuth: true },
    },
    {
        path: '/tasks',
        name: 'task-list',
        component: TaskList,
    },
    {
        path: '/tasks/create',
        name: 'task-create',
        component: TaskFormPage,
    },
    {
        path: '/tasks/edit/:id',
        name: 'task-edit',
        component: TaskFormPage,
        props: true,  // Pass route params as props to the component
    },
    // Route fallback jika route tidak ditemukan
    {
        path: '/:catchAll(.*)',
        name: 'not-found',
        component: PageNotFound
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

// Gunakan Navigation Guards untuk memeriksa apakah pengguna sudah login
router.beforeEach((to, from, next) => {
    const isAuthenticated = localStorage.getItem('token');
    if (to.meta.requiresAuth && !isAuthenticated) {
        next({ name: 'login' });
    } else {
        next();
    }
});

export default router;
