<template>
  <div class="p-6 bg-gradient-to-br from-white to-amber-100 min-h-screen">
    <!-- Hero Section with Parallax Effect -->
    <div class="relative h-96 overflow-hidden rounded-xl mb-8 shadow-lg">
      <div
        class="absolute inset-0 bg-cover bg-center transition-transform duration-1000 hover:scale-105"
        :style="{ backgroundImage: `url(${ijen})` }"
      ></div>
      <div
        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-8"
      >
        <h1 class="text-4xl md:text-5xl font-bold text-white drop-shadow-lg">
          Kawah Ijen
          <span class="text-amber-300">| Blue Fire Experience</span>
        </h1>
      </div>
    </div>

    <!-- Interactive Facts Section -->
    <section
      class="bg-white/90 p-6 rounded-xl shadow-md mb-8 backdrop-blur-sm transform transition-all hover:shadow-xl"
    >
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-semibold text-amber-700 flex items-center">
          <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
            <path
              fill-rule="evenodd"
              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9z"
              clip-rule="evenodd"
            />
          </svg>
          Fakta Menarik Kawah Ijen
        </h2>
        <button
          @click="showAddFactModal = true"
          class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-full text-sm font-medium transition-all"
        >
          + Tambah Fakta
        </button>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div
          v-for="(fact, index) in facts"
          :key="index"
          class="bg-amber-50/80 p-4 rounded-lg border border-amber-100 hover:border-amber-300 transition-all group relative"
        >
          <div class="flex gap-3 items-start">
            <span class="text-amber-500 text-xl mt-1">{{
              factIcons[index % factIcons.length]
            }}</span>
            <div>
              <h3 class="font-semibold text-amber-800">{{ fact.title }}</h3>
              <p class="text-gray-700">{{ fact.content }}</p>
            </div>
          </div>
          <div class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity">
            <button @click="editFact(index)" class="text-amber-600 hover:text-amber-800 p-1">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                />
              </svg>
            </button>
            <button @click="deleteFact(index)" class="text-red-500 hover:text-red-700 p-1 ml-1">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                  fill-rule="evenodd"
                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                  clip-rule="evenodd"
                />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- Stories Section with CRUD -->
    <section class="bg-white/90 p-6 rounded-xl shadow-md mb-8 backdrop-blur-sm">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-semibold text-amber-700 flex items-center">
          <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"
            />
          </svg>
          Cerita & Legenda
        </h2>
        <button
          @click="showAddStoryModal = true"
          class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-full text-sm font-medium transition-all"
        >
          + Tambah Cerita
        </button>
      </div>

      <div class="space-y-6">
        <div
          v-for="(story, index) in stories"
          :key="index"
          class="bg-white p-5 rounded-lg shadow-sm border border-amber-100 hover:shadow-md transition-all group relative"
        >
          <h3 class="text-xl font-semibold mb-2 text-amber-700">{{ story.judul }}</h3>
          <p class="text-gray-700 leading-relaxed">{{ story.konten }}</p>

          <div
            class="absolute top-3 right-3 opacity-0 group-hover:opacity-100 transition-opacity flex"
          >
            <button @click="editStory(index)" class="text-amber-600 hover:text-amber-800 p-1">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                />
              </svg>
            </button>
            <button @click="deleteStory(index)" class="text-red-500 hover:text-red-700 p-1 ml-1">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                  fill-rule="evenodd"
                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                  clip-rule="evenodd"
                />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- Photo Gallery -->
    <section class="bg-white/90 p-6 rounded-xl shadow-md backdrop-blur-sm">
      <h2 class="text-2xl font-semibold mb-4 text-amber-700">Galeri Foto</h2>
      <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <div
          v-for="(photo, index) in photos"
          :key="index"
          class="relative group overflow-hidden rounded-lg aspect-square"
        >
          <img
            :src="photo"
            alt="Kawah Ijen"
            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
          />
          <div
            class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center"
          >
            <button
              @click="deletePhoto(index)"
              class="text-white bg-red-500/80 hover:bg-red-600/90 p-2 rounded-full"
            >
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                  fill-rule="evenodd"
                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                  clip-rule="evenodd"
                />
              </svg>
            </button>
          </div>
        </div>
        <div
          class="border-2 border-dashed border-amber-300 rounded-lg aspect-square flex items-center justify-center cursor-pointer hover:bg-amber-50 transition-colors"
          @click="showPhotoUpload = true"
        >
          <div class="text-center p-4">
            <svg
              class="w-10 h-10 mx-auto text-amber-400"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 6v6m0 0v6m0-6h6m-6 0H6"
              />
            </svg>
            <p class="text-amber-600 mt-2">Tambah Foto</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Add Fact Modal -->
    <div
      v-if="showAddFactModal"
      class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 p-4"
    >
      <div class="bg-white rounded-xl shadow-xl p-6 w-full max-w-md">
        <h3 class="text-xl font-semibold mb-4">
          {{ editingFactIndex === null ? 'Tambah' : 'Edit' }} Fakta
        </h3>
        <div class="space-y-4">
          <div>
            <label class="block text-gray-700 mb-2">Judul</label>
            <input
              v-model="currentFact.title"
              type="text"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500"
            />
          </div>
          <div>
            <label class="block text-gray-700 mb-2">Konten</label>
            <textarea
              v-model="currentFact.content"
              rows="3"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500"
            ></textarea>
          </div>
          <div class="flex justify-end space-x-3 pt-2">
            <button
              @click="showAddFactModal = false"
              class="px-4 py-2 text-gray-600 hover:text-gray-800"
            >
              Batal
            </button>
            <button
              @click="saveFact"
              class="px-4 py-2 bg-amber-500 text-white rounded-lg hover:bg-amber-600 transition-colors"
            >
              Simpan
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Add Story Modal -->
    <div
      v-if="showAddStoryModal"
      class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 p-4"
    >
      <div class="bg-white rounded-xl shadow-xl p-6 w-full max-w-md">
        <h3 class="text-xl font-semibold mb-4">
          {{ editingStoryIndex === null ? 'Tambah' : 'Edit' }} Cerita
        </h3>
        <div class="space-y-4">
          <div>
            <label class="block text-gray-700 mb-2">Judul</label>
            <input
              v-model="currentStory.judul"
              type="text"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500"
            />
          </div>
          <div>
            <label class="block text-gray-700 mb-2">Konten</label>
            <textarea
              v-model="currentStory.konten"
              rows="5"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500"
            ></textarea>
          </div>
          <div class="flex justify-end space-x-3 pt-2">
            <button
              @click="showAddStoryModal = false"
              class="px-4 py-2 text-gray-600 hover:text-gray-800"
            >
              Batal
            </button>
            <button
              @click="saveStory"
              class="px-4 py-2 bg-amber-500 text-white rounded-lg hover:bg-amber-600 transition-colors"
            >
              Simpan
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Photo Upload Modal -->
    <div
      v-if="showPhotoUpload"
      class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 p-4"
    >
      <div class="bg-white rounded-xl shadow-xl p-6 w-full max-w-md">
        <h3 class="text-xl font-semibold mb-4">Unggah Foto</h3>
        <div class="space-y-4">
          <div class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center">
            <input
              type="file"
              ref="photoInput"
              accept="image/*"
              @change="handlePhotoUpload"
              class="hidden"
            />
            <svg
              class="w-12 h-12 mx-auto text-gray-400"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"
              />
            </svg>
            <p class="mt-2 text-gray-600">Seret dan lepas foto di sini atau</p>
            <button
              @click="$refs.photoInput.click()"
              class="mt-2 px-4 py-2 bg-amber-500 text-white rounded-lg hover:bg-amber-600 transition-colors"
            >
              Pilih File
            </button>
          </div>
          <div class="flex justify-end space-x-3 pt-2">
            <button
              @click="showPhotoUpload = false"
              class="px-4 py-2 text-gray-600 hover:text-gray-800"
            >
              Batal
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import ijen from '@/img/ijen.jpg'
import ijen2 from '@/img/ijen2.jpg'
import ijen3 from '@/img/ijen3.jpg'

// Sample data
const facts = ref([
  {
    title: 'Lokasi dan Geografi',
    content:
      'Kawah Ijen terletak di perbatasan Kabupaten Banyuwangi dan Bondowoso, Jawa Timur, dengan ketinggian 2.386 mdpl.',
  },
  {
    title: 'Blue Fire',
    content:
      'Salah satu dari dua tempat di dunia yang memiliki api biru, disebabkan oleh pembakaran gas sulfur.',
  },
  {
    title: 'Danau Asam',
    content: 'Memiliki danau kawah asam terbesar di dunia dengan kedalaman 200 meter dan pH 0.5.',
  },
  {
    title: 'Penambang Sulfur',
    content: 'Lokasi penambangan sulfur tradisional dimana pekerja mengambil sulfur secara manual.',
  },
  {
    title: 'Sunrise View',
    content:
      'Spot sunrise populer dengan pemandangan gunung-gunung sekitar dan pantulan danau kawah.',
  },
])

const stories = ref([
  {
    judul: 'Legenda Kawah Ijen',
    konten:
      'Menurut legenda setempat, Kawah Ijen adalah tempat bersemayamnya roh-roh penunggu gunung. Api biru dianggap sebagai manifestasi kekuatan spiritual.',
  },
  {
    judul: 'Asal Usul Nama Ijen',
    konten:
      'Nama "Ijen" berasal dari kata "Hijau" dalam bahasa lokal, merujuk pada warna hijau toska dari danau kawahnya.',
  },
  {
    judul: 'Kehidupan Penambang Sulfur',
    konten:
      'Para penambang sulfur bekerja dalam kondisi ekstrem, membawa beban 70-90kg sulfur sejauh 3km menuruni gunung untuk dijual.',
  },
])

const photos = ref([ijen, ijen2, ijen3])

// Icons for facts
const factIcons = ['🌋', '🔥', '🏞️', '🧑‍🏭', '🌄', '🧪', '⚠️', '👣']

// Fact CRUD
const showAddFactModal = ref(false)
const editingFactIndex = ref(null)
const currentFact = ref({ title: '', content: '' })

function editFact(index) {
  currentFact.value = { ...facts.value[index] }
  editingFactIndex.value = index
  showAddFactModal.value = true
}

function deleteFact(index) {
  if (confirm('Apakah Anda yakin ingin menghapus fakta ini?')) {
    facts.value.splice(index, 1)
  }
}

function saveFact() {
  if (editingFactIndex.value === null) {
    facts.value.push({ ...currentFact.value })
  } else {
    facts.value[editingFactIndex.value] = { ...currentFact.value }
  }
  showAddFactModal.value = false
  resetCurrentFact()
}

function resetCurrentFact() {
  currentFact.value = { title: '', content: '' }
  editingFactIndex.value = null
}

// Story CRUD
const showAddStoryModal = ref(false)
const editingStoryIndex = ref(null)
const currentStory = ref({ judul: '', konten: '' })

function editStory(index) {
  currentStory.value = { ...stories.value[index] }
  editingStoryIndex.value = index
  showAddStoryModal.value = true
}

function deleteStory(index) {
  if (confirm('Apakah Anda yakin ingin menghapus cerita ini?')) {
    stories.value.splice(index, 1)
  }
}

function saveStory() {
  if (editingStoryIndex.value === null) {
    stories.value.push({ ...currentStory.value })
  } else {
    stories.value[editingStoryIndex.value] = { ...currentStory.value }
  }
  showAddStoryModal.value = false
  resetCurrentStory()
}

function resetCurrentStory() {
  currentStory.value = { judul: '', konten: '' }
  editingStoryIndex.value = null
}

// Photo CRUD
const showPhotoUpload = ref(false)

function handlePhotoUpload(e) {
  const files = e.target.files
  if (files.length > 0) {
    const reader = new FileReader()
    reader.onload = (event) => {
      photos.value.push(event.target.result)
      showPhotoUpload.value = false
    }
    reader.readAsDataURL(files[0])
  }
}

function deletePhoto(index) {
  if (confirm('Apakah Anda yakin ingin menghapus foto ini?')) {
    photos.value.splice(index, 1)
  }
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

body {
  font-family: 'Poppins', sans-serif;
}

.parallax-bg {
  will-change: transform;
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

/* Aspect ratio for gallery */
.aspect-square {
  aspect-ratio: 1/1;
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
