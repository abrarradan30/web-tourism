<template>
  <div class="p-6">
    <h1 class="text-4xl font-bold mb-4">Taman Nasional Baluran</h1>
    <img :src="baluran" alt="Baluran" class="rounded-xl mb-4 w-full max-w-3xl mx-auto" />
    <p class="text-lg">Padang savana ala "Africa van Java".</p>
  </div>
</template>

<script setup>
import baluran from '@/img/baluran.jpg'
</script>

<style scoped>
img {
  max-height: 500px;
  object-fit: cover;
}
</style>
