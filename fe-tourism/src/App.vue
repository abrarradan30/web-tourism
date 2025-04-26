<script setup>
import { RouterView, useRoute } from 'vue-router'
import Footer from './components/footer.vue'
import Navbar from './components/navbar.vue'

const route = useRoute()
</script>

<template>
  <div class="min-h-screen relative">
    <Navbar v-if="!route.meta.hideLayout" />
    <main class="">
      <RouterView />
    </main>
    <Footer v-if="!route.meta.hideLayout" />
  </div>
</template>
