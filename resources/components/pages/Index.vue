<template>
    <div>
      <h1>Hello World</h1>
      <button @click="navigateTo('/test/')">Home</button>
      <button @click="navigateTo('/test/about')">About</button>
      <button @click="navigateTo('/test/contact')">Contact</button>
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
