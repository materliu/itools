import VueRouter from 'vue-router';
import PageTools from './Tools.vue';


const page_Tools = {
    component: PageTools,
    meta: {
        breadcrumb: [
            {
                name: '工具集',
                href: '/tools'
            }
        ]
    }
};


const routes = [
    _.assign({path: '/tools'}, page_Tools),
    _.assign({path: '/'}, page_Tools),
];

const router = new VueRouter({
    routes
});

export default router;
