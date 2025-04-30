<template>
  <div class="p-6">
    <h1 class="text-4xl font-bold mb-4">Kawah Ijen</h1>
    <img :src="ijen" alt="Kawah Ijen" class="rounded-xl mb-4 w-full max-w-3xl mx-auto" />
    <p class="text-lg">Fenomena blue fire dan danau asam hijau toska.</p>
  </div>
</template>

<script setup>
import ijen from '@/img/ijen.jpg'
</script>

<style scoped>
img {
  max-height: 500px;
  object-fit: cover;
}
</style>
