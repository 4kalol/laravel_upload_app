// フロントのエントリーポイント
import { createApp } from 'vue';
import App from '../../components/pages/Index.vue';
import router from '../../router';

createApp(App)
  .use(router)
  .mount('#app');
