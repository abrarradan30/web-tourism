<script setup>
import { ref, computed, onMounted, onBeforeUnmount } from 'vue'
import { RouterLink, useRoute } from 'vue-router'
import logoBlack from '@/img/black.png'
import logoWhite from '@/img/white.png'
import 'remixicon/fonts/remixicon.css'

const route = useRoute()
const isScrolled = ref(false)

const isSearchExpanded = ref(false)
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

const handleScroll = () => {
  if (route.path === '/') {
    isScrolled.value = window.scrollY > 50
  }
}

const handleKeydown = (event) => {
  if (event.key === 'Escape' && isSearchExpanded.value) {
    isSearchExpanded.value = false
    showDropdown.value = false
  }
}

onMounted(() => {
  window.addEventListener('scroll', handleScroll)
  document.addEventListener('mousedown', handleClickOutside)
  document.addEventListener('keydown', handleKeydown)
})

onBeforeUnmount(() => {
  window.removeEventListener('scroll', handleScroll)
  document.removeEventListener('mousedown', handleClickOutside)
  document.removeEventListener('keydown', handleKeydown)
})
</script>

<template>
  <nav
    @mouseenter="isHovered = true"
    @mouseleave="isHovered = false"
    :class="[
      'fixed top-0 left-0 w-full z-50 px-4 sm:px-6 py-4 flex justify-between items-center transition duration-300',
      isScrolled ? 'bg-white shadow-md' : 'bg-transparent',
    ]"
  >
    <!-- Logo -->
    <div class="z-50">
      <img
        :src="isScrolled ? logoBlack : logoWhite"
        alt="Logo"
        class="h-12 w-auto transition-all duration-500 ease-in-out"
        :class="[isScrolled ? 'scale-110 text-gray-800' : 'scale-100 text-white', 'transform']"
      />
    </div>

    <!-- Desktop Menu -->
    <div class="hidden md:flex space-x-6">
      <RouterLink
        to="/"
        :class="[
          isScrolled || isHovered
            ? 'text-gray-800 hover:text-amber-500'
            : 'text-white hover:text-amber-300',
          'font-bold',
        ]"
      >
        Home
      </RouterLink>
      <RouterLink
        to="/Top"
        :class="[
          isScrolled || isHovered
            ? 'text-gray-800 hover:text-amber-500'
            : 'text-white hover:text-amber-300',
          'font-bold',
        ]"
      >
        Top Destination
      </RouterLink>
      <RouterLink
        to="/Stories"
        :class="[
          isScrolled || isHovered
            ? 'text-gray-800 hover:text-amber-500'
            : 'text-white hover:text-amber-300',
          'font-bold',
        ]"
      >
        Travel Stories
      </RouterLink>
    </div>

    <div
      v-if="isMobileMenuOpen"
      class="fixed inset-0 bg-white bg-opacity-95 z-40 flex flex-col items-center justify-center space-y-8 md:hidden"
      :class="isScrolled ? 'text-gray-800' : 'text-gray-900'"
    >
      <RouterLink to="/" class="text-2xl font-bold py-2" @click="isMobileMenuOpen = false">
        Home
      </RouterLink>
      <RouterLink to="/Top" class="text-2xl font-bold py-2" @click="isMobileMenuOpen = false">
        Top Destination
      </RouterLink>
      <RouterLink to="/Stories" class="text-2xl font-bold py-2" @click="isMobileMenuOpen = false">
        Travel Stories
      </RouterLink>
    </div>

    <!-- Right Section (Search + Mobile Menu Button) -->
    <div class="flex items-center space-x-4">
      <!-- Search Container -->
      <div class="relative" ref="searchContainer">
        <div class="flex items-center">
          <!-- Search Icon Trigger -->
          <button
            @click.stop="toggleSearch"
            class="p-2 rounded-full transition-all duration-300 ease-in-out hover:bg-gray-100 hover:scale-110 z-50"
            :class="[
              isScrolled ? 'text-gray-800' : 'text-white',
              isSearchExpanded ? 'search-expanded' : '',
            ]"
          >
            <i class="ri-search-line text-xl"></i>
          </button>

          <div class="relative overflow-hidden">
            <div
              :class="[
                'flex items-center transition-all duration-500 ease-in-out overflow-hidden',
                isSearchExpanded ? 'w-40 sm:w-64 opacity-100' : 'w-0 opacity-0',
              ]"
            >
              <input
                v-model="searchQuery"
                @focus="showDropdown = true"
                @blur="
                  setTimeout(() => {
                    showDropdown = false
                  }, 200)
                "
                type="text"
                placeholder="Search..."
                class="w-full px-3 py-2 border-0 bg-transparent focus:outline-none"
                :class="
                  isScrolled
                    ? 'text-gray-800 rounded-3xl box-border'
                    : 'text-gray-800 bg-white bg-opacity-80 rounded-3xl shadow-2xl'
                "
              />
            </div>

            <transition
              enter-active-class="transition duration-200 ease-out"
              leave-active-class="transition duration-150 ease-in"
              enter-from-class="transform opacity-0 scale-95"
              enter-to-class="transform opacity-100 scale-100"
              leave-from-class="transform opacity-100 scale-100"
              leave-to-class="transform opacity-0 scale-95"
            >
              <div
                v-show="showDropdown && isSearchExpanded && searchQuery.length > 0"
                class="absolute top-full mt-1 w-full bg-white rounded-md shadow-lg z-50"
              >
                <ul class="py-1 max-h-60 overflow-y-auto">
                  <li
                    v-for="(option, index) in filteredOptions"
                    :key="index"
                    @mousedown.prevent="selectOption(option)"
                    class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer"
                  >
                    {{ option }}
                  </li>
                </ul>
              </div>
            </transition>
          </div>
        </div>
      </div>

      <!-- Mobile Menu Button -->
      <button
        @click="toggleMobileMenu"
        class="p-2 rounded-full transition-all duration-300 ease-in-out hover:bg-gray-100 hover:scale-110 md:hidden z-50"
        :class="isScrolled ? 'text-gray-800' : 'text-white'"
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
