<template>
  <div class="p-6">
    <h1 class="text-4xl font-bold mb-4">Gunung Semeru</h1>
    <img :src="semeru" alt="Semeru" class="rounded-xl mb-4 w-full max-w-3xl mx-auto" />
    <p class="text-lg">Puncak tertinggi di Pulau Jawa.</p>
  </div>
</template>

<script setup>
import semeru from '@/img/semeru.jpg'
</script>

<style scoped>
img {
  max-height: 500px;
  object-fit: cover;
}
</style>
