import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
// import { createPinia } from 'pinia'; // Uncomment if using Pinia

const app = createApp(App);
app.use(router);
// app.use(createPinia()); // Uncomment if using Pinia
app.mount('#app');
