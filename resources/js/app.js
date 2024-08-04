import {createApp} from 'vue'
import '../css/app.css'
import App from '../js/App.vue'
import router from './router'

createApp(App).use(router).mount("#app")