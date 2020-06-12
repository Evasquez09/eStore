require('../bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const Admin1 = {
    template: '<section class="hero is-primary">\n' +
        '  <div class="hero-body">\n' +
        '    <div class="container">\n' +
        '      <h1 class="title">\n' +
        '        Admin Component 1\n' +
        '      </h1>\n' +
        '      <h2 class="subtitle">\n' +
        '        Test Subtitle\n' +
        '      </h2>\n' +
        '    </div>\n' +
        '  </div>\n' +
        '</section>'
}
const Admin2 = {template: '<section class="hero is-dark">\n' +
        '  <div class="hero-body">\n' +
        '    <div class="container">\n' +
        '      <h1 class="title">\n' +
        '        Admin Component 2\n' +
        '      </h1>\n' +
        '      <h2 class="subtitle">\n' +
        '        Test Subtitle\n' +
        '      </h2>\n' +
        '    </div>\n' +
        '  </div>\n' +
        '</section>'}

const routes = [
    {path: '/admin2', component: Admin2},
    {path: '/', component: Admin1}
]

const router = new VueRouter({
    routes
})

const app = new Vue({
    router,
    el: '#app',
});
