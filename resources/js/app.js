import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import ProductList from './components/ProductList.vue';
import ProductDetail from './components/ProductDetail.vue';

const routes = [
    { path: '/', component: ProductList },
    { path: '/products/:id', component: ProductDetail },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

const app = createApp({});
app.use(router);
app.mount('#app');
