import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);

import App from './views/App'
import About from './views/About'
import Home from './views/Home'
import UsersIndex from './views/UsersIndex'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/about',
            name: 'about',
            component: About,
        },
        {
            path: '/users',
            name: 'users.index',
            component: UsersIndex,
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
