import { createRouter, createWebHashHistory  } from 'vue-router'

const routes = [
    {
        path: '/',
        name: 'root',
        redirect: '/datos',
    },
    {
        path: '/datos',
        name: 'Pqrs',
        component: () => import('./Datos'),         
    },    
    {
        path: '/editar/:id',
        name: 'Editar',
        component: () => import('./Editar'),
    },
]

const router = createRouter({
    history: createWebHashHistory(),
    routes     
})

export default router