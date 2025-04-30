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
const searchQuery = ref('')
const showDropdown = ref(false)

const searchOptions = [
  'Bali Vacation Packages',
  'Japan Cherry Blossom',
  'European Tour',
  'Mountain Trekking',
  'Beach Resorts',
]

const filteredOptions = computed(() => {
  return searchOptions.filter((option) =>
    option.toLowerCase().includes(searchQuery.value.toLowerCase()),
  )
})

const toggleSearch = () => {
  isSearchExpanded.value = !isSearchExpanded.value
  if (isSearchExpanded.value) {
    setTimeout(() => {
      showDropdown.value = true
    }, 300)
  } else {
    showDropdown.value = false
    searchQuery.value = ''
  }
}

const selectOption = (option) => {
  searchQuery.value = option
  showDropdown.value = false
  console.log('Searching for:', option)
}

const searchContainer = ref(null)

const handleClickOutside = (event) => {
  if (searchContainer.value && !searchContainer.value.contains(event.target)) {
    isSearchExpanded.value = false
    showDropdown.value = false
  }
}

const toggleMobileMenu = () => {
  isMobileMenuOpen.value = !isMobileMenuOpen.value

  if (isMobileMenuOpen.value) {
    isSearchExpanded.value = false
  }
}

// Optional: logic untuk mendeteksi scroll dan update isScrolled
window.addEventListener('scroll', () => {
  isScrolled.value = window.scrollY > 50
})
</script>


<template>
  <nav
    @mouseenter="isHovered = true"
    @mouseleave="isHovered = false"
    :class="[
      'fixed top-0 left-0 w-full z-50 px-6 py-4 flex justify-between items-center transition duration-300',
      isScrolled ? 'bg-white shadow-md' : 'bg-transparent',
    ]"
  >
    <div :class="isScrolled ? 'text-gray-900' : 'text-white'" class="text-2xl font-bold">
      Indonesia.Travel
    </div>

    <!-- Desktop Menu -->
    <div class="hidden md:flex space-x-6">
      <RouterLink
        to="/"
        :class="[
          (isScrolled || isHovered) ? 'text-gray-800 hover:text-amber-500' : 'text-white hover:text-amber-300',
          'font-bold'
        ]"
      >
        Home
      </RouterLink>
      <RouterLink
        to="/Top"
        :class="[
          (isScrolled || isHovered) ? 'text-gray-800 hover:text-amber-500' : 'text-white hover:text-amber-300',
          'font-bold'
        ]"
      >
        Top Destination
      </RouterLink>
      <RouterLink
        to="/Stories"
        :class="[
          (isScrolled || isHovered) ? 'text-gray-800 hover:text-amber-500' : 'text-white hover:text-amber-300',
          'font-bold'
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
        <i
          class="text-2xl"
          :class="isMobileMenuOpen ? 'ri-close-line text-neutral-900' : 'ri-menu-line'"
        ></i>
      </button>
    </div>
  </nav>
</template>

<style>
.ri-search-line {
  transition: transform 0.3s ease;
}
.search-expanded .ri-search-line {
  transform: rotate(90deg);
}

/* Smooth transitions for mobile menu */
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.3s;
}
.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
</style>
