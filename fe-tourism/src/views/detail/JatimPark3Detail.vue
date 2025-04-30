<template>
  <div class="p-6">
    <h1 class="text-4xl font-bold mb-4">Jatim Park 3</h1>
    <img :src="jatimpark3" alt="Jatim Park 3" class="rounded-xl mb-4 w-full max-w-3xl mx-auto" />
    <p class="text-lg">Wisata keluarga bertema dinosaurus dan dunia fantasi modern.</p>
  </div>
</template>

<script setup>
import jatimpark3 from '@/img/jatim-park-3.jpg'
</script>

<style scoped>
img {
  max-height: 500px;
  object-fit: cover;
}
</style>
