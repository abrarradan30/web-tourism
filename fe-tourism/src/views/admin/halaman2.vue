<script setup>
import Cookies from 'js-cookie'
import { RouterLink, useRouter } from 'vue-router'

const router = useRouter()

function handleLogout() {
  Cookies.remove('token')
  router.push('/login')
}
</script>

<template>
  <div class="flex">
    <div class="w-64 min-h-screen h-full bg-gray-800 text-white p-4 flex flex-col justify-between">
      <div>
        <h1 class="text-2xl font-bold mb-6">Sidebar</h1>
        <router-link to="/" class="block py-2 px-4 hover:bg-gray-700 rounded"
          >Dashboard</router-link
        >
        <router-link to="/halaman1" class="block py-2 px-4 hover:bg-gray-700 rounded"
          >Halaman1</router-link
        >
        <router-link to="/halaman2" class="block py-2 px-4 hover:bg-gray-700 rounded"
          >Halaman2</router-link
        >
      </div>
      <button
        @click="handleLogout"
        class="mt-4 py-2 px-4 bg-red-600 hover:bg-red-700 rounded text-white cursor-pointer duration-200"
      >
        Logout
      </button>
    </div>
    <div class="flex-1">
      <main class="p-4">
        <H1>halaman2</H1>
      </main>
    </div>
  </div>
</template>
