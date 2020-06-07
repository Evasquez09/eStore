require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const Foo = {template: '<section class="hero is-primary">\n' +
        '  <div class="hero-body">\n' +
        '    <div class="container">\n' +
        '      <h1 class="title">\n' +
        '        Primary title\n' +
        '      </h1>\n' +
        '      <h2 class="subtitle">\n' +
        '        Primary subtitle\n' +
        '      </h2>\n' +
        '    </div>\n' +
        '  </div>\n' +
        '</section>'}
const Bar = {template: '<div>bar</div>'}

const routes = [
    {path: '/bar', component: Bar},
    {path: '/', component: Foo}
]

const router = new VueRouter({
    // mode: 'history',
    routes
})

const app = new Vue({
    router,
    el: '#app',
});
