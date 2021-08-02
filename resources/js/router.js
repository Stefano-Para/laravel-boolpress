// gestione import dipendenze
import Vue from 'vue';
import VueRouter from 'vue-router';

// inizializzazione router
Vue.use(VueRouter);

// import dei componenti richiamati nelle rotte
import Home from './pages/Home';
import About from './pages/About';
import Blog from './pages/Blog';
import SinglePost from './pages/SinglePost.vue'

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
            component: About
        },
        {
            path: '/blog',
            name: 'blog',
            component: Blog
        },
        {
            path: '/blog/:slug',
            name: 'single-post',
            component: SinglePost
        },
    ]
});

export default router;