// フロントのルート定義
import { createRouter, createWebHistory } from 'vue-router';
import Home from '../components/pages/test/Home.vue';
import About from '../components/pages/test/About.vue';
import Contact from '../components/pages/test/Contact.vue';
import Image from '../components/pages/tab/Image.vue';
import Video from '../components/pages/tab/Video.vue';
import Audio from '../components/pages/tab/Audio.vue';

const routes = [
  // 表示テスト
  { path: '/test/', component: Home },
  { path: '/test/about', component: About },
  { path: '/test/contact', component: Contact },
  // ファイルアップローダー
  { path: '/image', component: Image},
  { path: '/video', component: Video},
  { path: '/audio', component: Audio},
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
