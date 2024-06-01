import './assets/main.css'
import './index.css'

import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'
import apiClient from './axios';

const app = createApp(App)

app.config.globalProperties.$http = apiClient;

app.use(createPinia())
app.use(router)

app.mount('#app')
