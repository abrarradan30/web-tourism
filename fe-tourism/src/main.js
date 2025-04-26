import './assets/main.css'

import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'
import axios from 'axios'
import '@fortawesome/fontawesome-free/css/all.min.css'

// base URL dari axios
axios.defaults.baseURL = import.meta.env.VITE_API_BASE_URL

const app = createApp(App)

app.use(createPinia())
app.use(router)

app.mount('#app')
