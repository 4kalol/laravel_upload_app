import { createRouter, createWebHistory } from 'vue-router';
import Home from '../components/pages/test/Home.vue';
import About from '../components/pages/test/About.vue';
import Contact from '../components/pages/test/Contact.vue';

const routes = [
  { path: '/test/', component: Home },
  { path: '/test/about', component: About },
  { path: '/test/contact', component: Contact },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
