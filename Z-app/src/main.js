import { createApp } from 'vue'
import router from './router'
import { createPinia } from 'pinia'
import PrimeVue from 'primevue/config'

import Avatar from 'primevue/avatar';
import Menu from 'primevue/menu';



import 'primeicons/primeicons.css'
import App from './App.vue'
import './style.css'

const pinia = createPinia()

createApp(App)
    .component('Avatar', Avatar)
    .component('Menu', Menu)
    .use(PrimeVue)
    .use(pinia)
    .use(router)
    .mount('#app')
