import Region from "../components/Admin/Locations/Region";
import Province from "../components/Admin/Locations/Province";
import Municipality from "../components/Admin/Locations/Municipality";

const routes = [{
        path: '/home',
        component: () => import('../Pages/Home.vue'),
        name: 'home'
    },
    {
        path: '/locations',
        component: () => import('../Pages/Location.vue'),
        name: 'locations',
        beforeEnter: admin
    }, 
    {
        path: '/agencies',
        component: () => import('../Pages/Agency.vue'),
        name: 'agencies',
        beforeEnter: admin
    }, 
    // {
    //     path: '/locations',
    //     component: () => import('../Pages/Location.vue'),
    //     name: 'locations',
    //     beforeEnter: admin,
    //     children: [{
    //         path: "regions",
    //         name: "regions",
    //         component: Region
    //     },
    //     {
    //         path: "provinces",
    //         name: "provinces",
    //         component: Province
    //     },
    //     {
    //         path: "municipalities",
    //         name: "municipalities",
    //         component: Municipality
    //     }
    // ]
    // },
    {
        path: '/dropdowns',
        component: () => import('../Pages/Dropdown.vue'),
        name: 'dropdowns',
        beforeEnter: admin
    }, 
    {
        path: '/schools',
        component: () => import('../Pages/School.vue'),
        name: 'schools',
        beforeEnter: admin
    },
    {
        path: '/school/create',
        component: () => import('../Pages/School-create.vue'),
        name: 'school/create',
        beforeEnter: admin
    },
    {
        path: '/school/:id',
        component: () => import('../Pages/School-profile.vue'),
        name: 'school/profile',
        beforeEnter: admin
    },
    {
        path: '/courses',
        component: () => import('../Pages/Course.vue'),
        name: 'courses',
        beforeEnter: admin
    },
    {
        path: '/logs',
        component: () => import('../Pages/Log.vue'),
        name: 'logs',
        beforeEnter: admin
    },

];

function admin(to, from, next) {
    (window.User.role == "Administrator") ? next(true): next({
        path: '/home'
    });
}

export default routes;
