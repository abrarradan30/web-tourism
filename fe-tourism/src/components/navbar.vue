<script setup>
import { RouterLink } from 'vue-router'
</script>

<template>
  <!-- Navigation -->
  <nav class="relative z-10 px-6 py-4 flex justify-between items-center bg-black">
    <div class="text-white text-2xl font-bold">Indonesia.Travel</div>
    <div class="hidden md:flex space-x-6">
      <RouterLink to="/" class="text-white hover:text-amber-300">Home</RouterLink>
      <RouterLink to="/about" class="text-white hover:text-amber-300">About</RouterLink>
      <RouterLink to="/contact" class="text-white hover:text-amber-300">Contact</RouterLink>
      <RouterLink to="/halaman2" class="text-white hover:text-amber-300">halaman2</RouterLink>
    </div>
    <div class="flex items-center space-x-4">
      <button class="text-white">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-6 w-6"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
          />
        </svg>
      </button>
      <button class="text-white">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-6 w-6"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16"
          />
        </svg>
      </button>
    </div>
  </nav>
</template>
