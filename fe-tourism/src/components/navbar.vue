<script setup>
import { RouterLink } from 'vue-router'
</script>

<script>
import { ref } from 'vue'

export default {
  data() {
    return {
      isScrolled: false,
    }
  },
  mounted() {
    window.addEventListener('scroll', this.handleScroll)
  },
  beforeUnmount() {
    window.removeEventListener('scroll', this.handleScroll)
  },
  methods: {
    handleScroll() {
      this.isScrolled = window.scrollY > 50
    },
  },
}

const isScrolled = ref(false)
const isSearchOpen = ref(false)
const isMobileMenuOpen = ref(false)

const toggleSearch = () => {
  isSearchOpen.value = !isSearchOpen.value
}

const toggleMobileMenu = () => {
  isMobileMenuOpen.value = !isMobileMenuOpen.value
}

// Optional: logic untuk mendeteksi scroll dan update isScrolled
window.addEventListener('scroll', () => {
  isScrolled.value = window.scrollY > 50
})
</script>

<template>
  <nav
    :class="[
      'fixed top-0 left-0 w-full z-50 px-6 py-4 flex justify-between items-center transition duration-300',
      isScrolled ? 'bg-white shadow-md' : 'bg-transparent',
    ]"
  >
    <div :class="isScrolled ? 'text-gray-900' : 'text-white'" class="text-2xl font-bold">
      Indonesia.Travel
    </div>

    <div class="hidden md:flex space-x-6">
      <RouterLink
        to="/"
        :class="[
          isScrolled ? 'text-gray-800 hover:text-amber-500' : 'text-white hover:text-amber-300',
          'font-bold',
        ]"
      >
        Home
      </RouterLink>
      <RouterLink
        to="/Top"
        :class="[
          isScrolled ? 'text-gray-800 hover:text-amber-500' : 'text-white hover:text-amber-300',
          'font-bold',
        ]"
      >
        Top Destination
      </RouterLink>
      <RouterLink
        to="/Stories"
        :class="[
          isScrolled ? 'text-gray-800 hover:text-amber-500' : 'text-white hover:text-amber-300',
          'font-bold',
        ]"
      >
        Travel Stories
      </RouterLink>
      <RouterLink
        to="/Help"
        :class="[
          isScrolled ? 'text-gray-800 hover:text-amber-500' : 'text-white hover:text-amber-300',
          'font-bold',
        ]"
      >
        Help Center
      </RouterLink>
      <RouterLink
        to="/Login"
        :class="[
          isScrolled ? 'text-gray-800 hover:text-amber-500' : 'text-white hover:text-amber-300',
          'font-bold',
        ]"
      >
      </RouterLink>
    </div>

    <div class="flex items-center space-x-4">
      <!-- Tombol Search -->
      <button @click="toggleSearch" :class="[isScrolled ? 'text-gray-800' : 'text-white']">
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

      <!-- Tombol Toggle Menu - Hanya di Mobile -->
      <button
        @click="toggleMobileMenu"
        :class="[isScrolled ? 'text-gray-800' : 'text-white', 'md:hidden']"
      >
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
