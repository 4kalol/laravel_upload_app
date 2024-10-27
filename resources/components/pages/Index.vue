<template>
    <div>
        <!-- 親コンポーネント -->
        <h1>File Uploader</h1>
        <button @click="navigateTo('/image')">Image</button>
        <button @click="navigateTo('/video')">Video</button>
        <button @click="navigateTo('/audio')">Audio</button>
        <router-view></router-view>
    </div>
  </template>

  <script setup>
  import { useRouter } from 'vue-router';

  const router = useRouter();

  function navigateTo(path) {
    router.push(path);
  }
  </script>
