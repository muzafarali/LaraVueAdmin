import Vue from 'vue'
import VueRouter from 'vue-router'
import helper from './services/helper'
import VueAcl from 'vue-acl'

let routes = [
    {
        path: '/admin',
        component: require('./layouts/admin/default-admin'),
        meta: { requiresAuth: true, permission: 'admin|any', fail: '/error' },
        children: [
            {
                path: '/admin',
                component: require('./views/admin/pages/home'),
                meta: {  permission: 'admin|any', fail: '/error' }
            },
            {
                path: '/admin/home',
                component: require('./views/admin/pages/home'),
                meta: {  permission: 'admin|any', fail: '/error' }
            },
            {
                path: '/admin/blank',
                component: require('./views/admin/pages/blank'),
                meta: {  permission: 'admin|any', fail: '/error' }
            },
            {
                path: '/admin/configuration',
                component: require('./views/admin/configuration/configuration'),
                meta: {  permission: 'admin|any', fail: '/error' }
            },
            {
                path: '/admin/profile',
                component: require('./views/admin/user/profile'),
                meta: {  permission: 'admin|any', fail: '/error' }
            },
            {
                path: '/admin/task',
                component: require('./views/admin/task/index'),
                meta: {  permission: 'admin|any', fail: '/error' }
            },
            {
                path: '/admin/task/:id/edit',
                component: require('./views/admin/task/edit'),
                meta: {  permission: 'admin|any', fail: '/error' }
            },
            {
                path: '/admin/event',
                component: require('./views/admin/event/index'),
                meta: {  permission: 'any', fail: '/error' }
            },
            {
                path: '/admin/event/:id/edit',
                component: require('./views/admin/event/edit'),
                meta: {  permission: 'any', fail: '/error' }
            },
            {
                path: '/admin/user',
                component: require('./views/admin/user/index'),
                meta: {  permission: 'admin|any', fail: '/error' }
            }
        ]
    },
    {
        path: '/',
        component: require('./layouts/default-page'),
        meta: { requiresAuth: true, permission: 'admin|any', fail: '/error' },
        children: [
            {
                path: '/',
                component: require('./views/pages/home'),
                meta: {  permission: 'admin|any', fail: '/error' }
            },
            {
                path: '/home',
                component: require('./views/pages/home'),
                meta: {  permission: 'admin|any', fail: '/error' }
            },
            {
                path: '/blank',
                component: require('./views/pages/blank'),
                meta: {  permission: 'admin|any', fail: '/error' }
            },
            {
                path: '/configuration',
                component: require('./views/configuration/configuration'),
                meta: {  permission: 'admin|any', fail: '/error' }
            },
            {
                path: '/profile',
                component: require('./views/user/profile'),
                meta: {  permission: 'admin|any', fail: '/error' }
            },
            {
                path: '/task',
                component: require('./views/task/index'),
                meta: {  permission: 'admin|any', fail: '/error' }
            },
            {
                path: '/task/:id/edit',
                component: require('./views/task/edit'),
                meta: {  permission: 'admin|any', fail: '/error' }
            },
          {
            path: '/admin/event',
            component: require('./views/admin/event/index'),
            meta: {  permission: 'any', fail: '/error' }
          },
          {
            path: '/admin/event/:id/edit',
            component: require('./views/admin/event/edit'),
            meta: {  permission: 'any', fail: '/error' }
          },
            {
                path: '/user',
                component: require('./views/user/index'),
                meta: {  permission: 'admin|any', fail: '/error' }
            },
        ]
    },
    {
        path: '/',
        component: require('./layouts/guest-page'),
        meta: { requiresGuest: true, permission: 'any' },
        children: [
            {
                path: '/login',
                component: require('./views/auth/login'),
                meta: {  permission: 'any' }
            },
            {
                path: '/password',
                component: require('./views/auth/password'),
              meta: {  permission: 'any' }
            },
            {
                path: '/register',
                component: require('./views/auth/register'),
              meta: {  permission: 'any' }
            },
            {
                path: '/auth/:token/activate',
                component: require('./views/auth/activate'),
              meta: {  permission: 'any' }
            },
            {
                path: '/password/reset/:token',
                component: require('./views/auth/reset'),
              meta: {  permission: 'any' }
            },
            {
                path: '/auth/social',
                component: require('./views/auth/social-auth'),
              meta: {  permission: 'any' }
            },
        ]
    },
    {
        path: '*',
        component : require('./layouts/error-page'),
        meta: {  permission: 'any' },
        children: [
            {
                path: '*',
                component: require('./views/errors/page-not-found'),
              meta: {  permission: 'any' }
            }
        ]
    }
];

const router = new VueRouter({
	routes,
    linkActiveClass: 'active',
    mode: 'history'
});

router.beforeEach((to, from, next) => {

    if (to.matched.some(m => m.meta.requiresAuth)){

        return helper.check().then(response => {
            if(!response){
                return next({ path : '/login'})
            }
            return next()
        })
    }

    if (to.matched.some(m => m.meta.requiresGuest)){
        return helper.check().then(response => {
            if(response){
                return next({ path : '/'})
            }

            return next()
        })
    }
    return next()
});
Vue.use(VueAcl, {router: router, init: 'any'});

export default router;
