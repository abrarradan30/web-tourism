<template>
  <div class="p-6 bg-gradient-to-br from-white to-amber-100 min-h-screen">
    <!-- Hero Section -->
    <div class="relative h-96 overflow-hidden rounded-xl mb-8 shadow-lg">
      <div
        class="absolute inset-0 bg-cover bg-center transition-transform duration-1000 hover:scale-105"
        :style="{ backgroundImage: `url(${bromo})` }"
      ></div>
      <div
        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-8"
      >
        <h1 class="text-4xl md:text-5xl font-bold text-white drop-shadow-lg">
          Java's Must-Visit Destinations
          <span class="text-amber-300">| Land of Wonders</span>
        </h1>
      </div>
    </div>

    <!-- Destinations Section -->
    <section
      class="bg-white/90 p-6 rounded-xl shadow-md mb-8 backdrop-blur-sm transform transition-all hover:shadow-xl"
    >
      <h2 class="text-2xl font-semibold mb-6 text-amber-700 border-b border-amber-200 pb-2">
        <svg class="w-6 h-6 inline-block mr-2" fill="currentColor" viewBox="0 0 20 20">
          <path
            fill-rule="evenodd"
            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
            clip-rule="evenodd"
          />
        </svg>
        Top Destinations in Java
      </h2>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Mount Bromo Card -->
        <div
          class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all group"
        >
          <div class="relative h-48 overflow-hidden">
            <img
              :src="bromo"
              alt="Mount Bromo"
              class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
            />
            <div
              class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-4"
            >
              <h3 class="text-xl font-bold text-white">Mount Bromo</h3>
            </div>
          </div>
          <div class="p-5">
            <p class="text-gray-700 mb-4">
              Experience the magical sunrise at the rim of Mount Bromo's crater, where golden light
              slowly spreads across the vast sea of sand.
            </p>
            <button
              @click="editDestination(0)"
              class="text-amber-600 hover:text-amber-800 font-medium"
            >
              Edit Content
            </button>
          </div>
        </div>

        <!-- Borobudur & Prambanan Card -->
        <div
          class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all group"
        >
          <div class="relative h-48 overflow-hidden">
            <img
              :src="borobudur"
              alt="Borobudur Temple"
              class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
            />
            <div
              class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-4"
            >
              <h3 class="text-xl font-bold text-white">Borobudur & Prambanan</h3>
            </div>
          </div>
          <div class="p-5">
            <p class="text-gray-700 mb-4">
              Travel back in time as you explore the ancient artistry of Borobudur and Prambanan
              Temples. Take in the panoramic beauty from the summit.
            </p>
            <button
              @click="editDestination(1)"
              class="text-amber-600 hover:text-amber-800 font-medium"
            >
              Edit Content
            </button>
          </div>
        </div>

        <!-- Malioboro Card -->
        <div
          class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all group"
        >
          <div class="relative h-48 overflow-hidden">
            <img
              :src="malioboro"
              alt="Malioboro Street"
              class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
            />
            <div
              class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-4"
            >
              <h3 class="text-xl font-bold text-white">Malioboro Street</h3>
            </div>
          </div>
          <div class="p-5">
            <p class="text-gray-700 mb-4">
              End your adventure with a feast for the senses along the bustling Malioboro Street.
              Savor the sweet, tantalizing flavors of gudeg.
            </p>
            <button
              @click="editDestination(2)"
              class="text-amber-600 hover:text-amber-800 font-medium"
            >
              Edit Content
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- Add New Destination Button -->
    <div class="flex justify-center mb-8">
      <button
        @click="showAddDestinationModal = true"
        class="bg-amber-500 hover:bg-amber-600 text-white px-6 py-3 rounded-full text-lg font-medium transition-all shadow-md flex items-center"
      >
        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
          <path
            fill-rule="evenodd"
            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
            clip-rule="evenodd"
          />
        </svg>
        Add New Destination
      </button>
    </div>

    <!-- Add/Edit Destination Modal -->
    <div
      v-if="showAddDestinationModal"
      class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 p-4"
    >
      <div class="bg-white rounded-xl shadow-xl p-6 w-full max-w-2xl">
        <h3 class="text-xl font-semibold mb-4">
          {{ editingDestinationIndex === null ? 'Add' : 'Edit' }} Destination
        </h3>
        <div class="space-y-4">
          <div>
            <label class="block text-gray-700 mb-2">Title</label>
            <input
              v-model="currentDestination.title"
              type="text"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500"
            />
          </div>
          <div>
            <label class="block text-gray-700 mb-2">Image URL</label>
            <input
              v-model="currentDestination.image"
              type="text"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500"
            />
          </div>
          <div>
            <label class="block text-gray-700 mb-2">Description</label>
            <textarea
              v-model="currentDestination.description"
              rows="4"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500"
            ></textarea>
          </div>
          <div class="flex justify-end space-x-3 pt-2">
            <button
              @click="showAddDestinationModal = false"
              class="px-4 py-2 text-gray-600 hover:text-gray-800"
            >
              Cancel
            </button>
            <button
              @click="saveDestination"
              class="px-4 py-2 bg-amber-500 text-white rounded-lg hover:bg-amber-600 transition-colors"
            >
              Save
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import bromo from '@/img/bromo.jpg'
import borobudur from '@/img/borobudur.jpg'
import malioboro from '@/img/malioboro.jpg'

// Sample destinations data
const destinations = ref([
  {
    title: 'Mount Bromo',
    image: bromo,
    description:
      "Experience the magical sunrise at the rim of Mount Bromo's crater, where golden light slowly spreads across the vast sea of sand. The crisp mountain air and a delicate veil of mist add to the breathtaking drama of this unforgettable sight.",
  },
  {
    title: 'Borobudur & Prambanan',
    image: borobudur,
    description:
      'Travel back in time as you explore the ancient artistry of Borobudur and Prambanan Temples. Take in the panoramic beauty from the summit of Borobudur and immerse yourself in the romantic legends carved into the majestic walls of Prambanan.',
  },
  {
    title: 'Malioboro Street',
    image: malioboro,
    description:
      "End your adventure with a feast for the senses along the bustling Malioboro Street. Savor the sweet, tantalizing flavors of gudeg, Yogyakarta's iconic jackfruit dish, a culinary treasure that embodies the heart of Javanese tradition.",
  },
])

// Destination CRUD
const showAddDestinationModal = ref(false)
const editingDestinationIndex = ref(null)
const currentDestination = ref({ title: '', image: '', description: '' })

function editDestination(index) {
  currentDestination.value = { ...destinations.value[index] }
  editingDestinationIndex.value = index
  showAddDestinationModal.value = true
}

function saveDestination() {
  if (editingDestinationIndex.value === null) {
    destinations.value.push({ ...currentDestination.value })
  } else {
    destinations.value[editingDestinationIndex.value] = { ...currentDestination.value }
  }
  showAddDestinationModal.value = false
  resetCurrentDestination()
}

function resetCurrentDestination() {
  currentDestination.value = { title: '', image: '', description: '' }
  editingDestinationIndex.value = null
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

body {
  font-family: 'Poppins', sans-serif;
}

.backdrop-blur-sm {
  backdrop-filter: blur(6px);
}

/* Smooth transitions */
.transition-all {
  transition: all 0.3s ease;
}

/* Hover effects */
.group:hover .group-hover\:opacity-100 {
  opacity: 1;
}

/* Modal animations */
.modal-enter-active,
.modal-leave-active {
  transition: opacity 0.3s ease;
}

.modal-enter-from,
.modal-leave-to {
  opacity: 0;
}

.modal-content-enter-active,
.modal-content-leave-active {
  transition: all 0.3s ease;
}

.modal-content-enter-from,
.modal-content-leave-to {
  opacity: 0;
  transform: translateY(20px);
}
</style>
