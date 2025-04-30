<template>
  <div class="p-6">
    <h1 class="text-4xl font-bold mb-4">Jatim Park 2</h1>
    <img :src="jatimpark2" alt="Jatim Park 2" class="rounded-xl mb-4 w-full max-w-3xl mx-auto" />
    <p class="text-lg">Taman satwa interaktif dan wahana edukasi untuk semua umur.</p>
  </div>
</template>

<script setup>
import jatimpark2 from '@/img/jatim-park-2.jpg'
</script>

<style scoped>
img {
  max-height: 500px;
  object-fit: cover;
}
</style>
