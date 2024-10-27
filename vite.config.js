import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/assets/js/app.js'], // アセットの入力ファイルを指定
      output: 'public/build', // 出力先を指定
      refresh: true,
    }),
    vue(),
  ],
});
