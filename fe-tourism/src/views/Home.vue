<script setup>
import { RouterLink, useRoute } from 'vue-router'
</script>

<template>
  <div class="min-h-screen bg-white scroll-smooth all">
    <!-- Hero Section -->
    <div class="relative h-screen">
      <!-- Background Image with overlay -->
      <div class="absolute inset-0 bg-black/50 z-10">
        <video
          class="absolute top-0 left-0 w-full h-full object-cover z-0"
          autoplay
          muted
          playsinline
          webkit-playsinline
        >
          <source
            src="https://cloud.indonesia.travel/minio/magnolia-assets/wonderful-indonesia-8.mp4"
            type="video/mp4"
          />
        </video>
      </div>
      <!-- Hero Content -->
      <Transition name="fade" appear>
        <div
          class="relative z-10 h-full flex flex-col justify-center items-center text-center px-4"
        >
          <h1
            class="text-4xl md:text-6xl font-bold text-white mb-6 shiny-text"
            data-text="WONDERFUL EAST JAVA"
          >
            WONDERFUL EAST JAVA
          </h1>
          <p class="text-xl text-white max-w-2xl mb-8">
            Discover the enchanting beauty of Indonesia's diverse cultures, breathtaking landscapes,
            and pristine beaches.
          </p>
          <div class="flex flex-col sm:flex-row gap-4">
            <button
              class="bg-amber-500 hover:bg-amber-600 text-white font-bold py-3 px-8 rounded-full transition duration-300"
            >
              <RouterLink to="/Top">Explore Destination</RouterLink>
            </button>
            <button
              class="bg-transparent border-2 border-white hover:bg-white/20 text-white font-bold py-3 px-8 rounded-full transition duration-300"
            >
              <a href="#youtube" class="scroll-smooth">Watch Video</a>
            </button>
          </div>
        </div>
      </Transition>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-20 mt-16">
      <section class="mb-20">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-gray-800 mb-4">Hot Destination</h2>
          <p class="text-gray-600 max-w-2xl mx-auto">
            Destinasi dengan kunjungan paling banyak bulan ini dan dengan view yang menarik.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6"></div>
      </section>

      <!-- Experiences Section -->
      <section class="mb-20">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-gray-800 mb-4">Unique Experiences</h2>
          <p class="text-gray-600 max-w-2xl mx-auto">
            Immerse yourself in Indonesia's rich culture and breathtaking nature.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6"></div>
      </section>

      <section class="mb-20" id="youtube">
        <div class="bg-gray-100 rounded-xl overflow-hidden">
          <div class="flex flex-col lg:flex-row">
            <div class="lg:w-2/3">
              <div class="relative pt-[56.25%]">
                <iframe
                  class="absolute top-0 left-0 w-full h-full"
                  src="https://www.youtube.com/embed/ruKqXQ2KtH4?si=Cbnh23wBjAjCQ4LX"
                  title="YouTube video player"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen
                >
                </iframe>
              </div>
            </div>
            <div class="lg:w-1/3 p-8 flex flex-col justify-center">
              <h3 class="text-2xl font-bold text-gray-800 mb-4">Discover Indonesia's Beauty</h3>
              <p class="text-gray-600 mb-6">
                Watch our latest video showcasing the stunning landscapes and vibrant cultures of
                Indonesia.
              </p>
              <button
                class="bg-amber-500 hover:bg-amber-600 text-white font-bold py-3 px-6 rounded-lg self-start"
              >
                Watch More Videos
              </button>
            </div>
          </div>
        </div>
      </section>

      <section class="mb-20">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-gray-800 mb-4">Travel Guides</h2>
          <p class="text-gray-600 max-w-2xl mx-auto">
            Plan your perfect trip with our comprehensive travel guides.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6"></div>
      </section>
    </div>
  </div>
</template>

<style scoped>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 1s ease;
}
.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}

@keyframes shine {
  0% {
    background-position: -200% center;
  }
  100% {
    background-position: 200% center;
  }
}

.all {
  scroll-behavior: smooth;
}

.shiny-text {
  position: relative;
  background: linear-gradient(90deg, #ffffff 0%, #fcd34d 50%, #ffffff 100%);
  background-size: 200% auto;
  color: transparent;
  background-clip: text;
  -webkit-background-clip: text;
  animation: shine 5s linear infinite;
}

/* Tambahan efek glow menggunakan ::after */
.shiny-text::after {
  content: attr(data-text); /* ambil isi teksnya */
  position: absolute;
  top: 0;
  left: 0;
  color: transparent;
  background: inherit;
  background-clip: text;
  -webkit-background-clip: text;

  filter: blur(8px);
  opacity: 0.6;
  z-index: -1;
}
</style>
