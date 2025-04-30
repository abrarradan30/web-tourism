<template>
  <div class="p-6">
    <h1 class="text-4xl font-bold mb-4">Pantai Papuma</h1>
    <img :src="papuma" alt="Papuma" class="rounded-xl mb-4 w-full max-w-3xl mx-auto" />
    <p class="text-lg">Pantai berpasir putih dengan batu karang.</p>
  </div>
</template>

<script setup>
import papuma from '@/img/papuma.jpg'
</script>

<style scoped>
img {
  max-height: 500px;
  object-fit: cover;
}
</style>
