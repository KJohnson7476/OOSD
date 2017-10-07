import VueRouter from 'vue-router'

let routes = [
    {
        path:'/',
        component:require('./components/Home.vue')
    },
    {
        path:'/about',
        component:require('./components/About.vue')
    },
    {
        path:'/vision',
        component:require('./components/Vision.vue')
    },
    {
        path:'/create',
        component:require('./components/Form.vue')
    }
];

export default new VueRouter({
    routes,
    linkActiveClass: 'active'
});