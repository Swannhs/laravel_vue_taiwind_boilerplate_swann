import store from "./store";
import router from "./routes";
import VueRouter from "vue-router";
import index from './index';

window.Vue = require('vue').default;

Vue.use(VueRouter);

const app = new Vue({
    el: '#app',
    router,
    store,
    components: {
        index
    }
});

