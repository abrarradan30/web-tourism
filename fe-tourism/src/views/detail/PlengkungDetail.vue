<template>
  <div class="p-6">
    <h1 class="text-4xl font-bold mb-4">Pantai Plengkung</h1>
    <img :src="plengkung" alt="Plengkung" class="rounded-xl mb-4 w-full max-w-3xl mx-auto" />
    <p class="text-lg">Surga selancar internasional di Banyuwangi.</p>
  </div>
</template>

<script setup>
import plengkung from '@/img/plengkung.jpg'
</script>

<style scoped>
img {
  max-height: 500px;
  object-fit: cover;
}
</style>
