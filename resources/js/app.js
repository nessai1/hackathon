import Vue from 'vue';
import VueRouter from 'vue-router';
import VueSlideoutPanel from 'vue2-slideout-panel';
import routes from './routes';

Vue.use(VueRouter);
Vue.use(VueSlideoutPanel);
import App from './views/app.vue';

const TestComponent = {
    name: 'my-test-component',
    template: `<div>My Test Component</div>`
};
Vue.use(TestComponent);

const router = new VueRouter({
    routes,
    mode: 'history'
});

const app = new Vue({
    el: '#app',
    components: { App },
    router
});
