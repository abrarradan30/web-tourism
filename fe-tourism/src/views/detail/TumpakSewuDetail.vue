<template>
  <div class="p-6">
    <h1 class="text-4xl font-bold mb-4">Air Terjun Tumpak Sewu</h1>
    <img :src="tumpak" alt="Tumpak Sewu" class="rounded-xl mb-4 w-full max-w-3xl mx-auto" />
    <p class="text-lg">"Niagara" dari Indonesia.</p>
  </div>
</template>

<script setup>
import tumpak from '@/img/tumpak-sewu.jpg'
</script>

<style scoped>
img {
  max-height: 500px;
  object-fit: cover;
}
</style>
