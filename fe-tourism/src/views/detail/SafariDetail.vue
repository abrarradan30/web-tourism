<template>
  <div class="p-6">
    <h1 class="text-4xl font-bold mb-4">Taman Safari Prigen</h1>
    <img :src="safari" alt="Safari" class="rounded-xl mb-4 w-full max-w-3xl mx-auto" />
    <p class="text-lg">Safari terbesar di Asia Tenggara.</p>
  </div>
</template>

<script setup>
import safari from '@/img/safari.jpg'
</script>

<style scoped>
img {
  max-height: 500px;
  object-fit: cover;
}
</style>
