<template>
  <div class="p-6">
    <h1 class="text-4xl font-bold mb-4">Jatim Park 1</h1>
    <img :src="jatimpark" alt="Jatim Park 1" class="rounded-xl mb-4 w-full max-w-3xl mx-auto" />
    <p class="text-lg">Taman hiburan dan edukasi keluarga.</p>
  </div>
</template>

<script setup>
import jatimpark from '@/img/jatim-park.jpg'
</script>

<style scoped>
img {
  max-height: 500px;
  object-fit: cover;
}
</style>
