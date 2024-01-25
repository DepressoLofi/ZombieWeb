import { createApp } from 'vue'
import router from './router'
import './style.css'
import { createPinia } from 'pinia'
import PrimeVue from 'primevue/config'

import Avatar from 'primevue/avatar';
import Menu from 'primevue/menu';
import InputText from 'primevue/inputtext';
import Dialog from 'primevue/dialog';




import 'primeicons/primeicons.css'
import App from './App.vue'




const pinia = createPinia()

createApp(App)
    .component('Avatar', Avatar)
    .component('Menu', Menu)
    .component('InputText', InputText)
    .component('Dialog', Dialog)
    .use(PrimeVue)
    .use(pinia)
    .use(router)
    .mount('#app')
