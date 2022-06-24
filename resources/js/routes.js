import HomePage from "./pages/HomePage";
import VueRouter from "vue-router";

const routes = [
    {
        path: '/',
        name: 'home',
        component: HomePage
    }
];

const router = new VueRouter({
    mode: 'history',
    routes
});

export default router;
