import { createRouter, createWebHashHistory  } from 'vue-router'

const routes = [
    {
        path: '/',
        name: 'root',
        component: () => import('./Datos'),
    },
    {
        path: '/localizacion',
        name: 'Localizacion',
        component: () => import('./Localizacion'),
    },  
    {
        path: '/economica',
        name: 'Economica',
        component: () => import('./Economica'),
    },
    {
        path: '/financiero',
        name: 'Financiero',
        component: () => import('./Financiero'),
    },
    {
        path: '/familiares',
        name: 'Familiares',
        component: () => import('./Familiares'),
    },
    {
        path: '/finalizar',
        name: 'Finalizar',
        component: () => import('./Finalizar'),
    },
]

const router = createRouter({
    history: createWebHashHistory(),
    routes     
})

export default router