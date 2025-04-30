<template>
  <div class="p-6">
    <h1 class="text-4xl font-bold mb-4">Pantai Balekambang</h1>
    <img :src="balekambang" alt="Balekambang" class="rounded-xl mb-4 w-full max-w-3xl mx-auto" />
    <p class="text-lg">"Tanah Lot"-nya Jawa Timur.</p>
  </div>
</template>

<script setup>
import balekambang from '@/img/balekambang.jpg'
</script>

<style scoped>
img {
  max-height: 500px;
  object-fit: cover;
}
</style>
  