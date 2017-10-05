import VueRouter from 'vue-router'

let routes = [
    {
        path:'/',
        component:require('./components/Example.vue')
    },
    {
        path:'/about',
        component:require('./components/About.vue')
    },
    {
        path:'/vision',
        component:require('./components/Vision.vue')
    }
];

export default new VueRouter({
    routes
});