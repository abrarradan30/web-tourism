<script setup>
import { RouterView } from 'vue-router'
import Footer from './components/footer.vue'
import Navbar from './components/navbar.vue'
</script>

<template>
  <div class="min-h-screen bg-gray-100">
    <Navbar />
    <main class="p-6">
      <RouterView />
    </main>
    <Footer />
  </div>
</template>
