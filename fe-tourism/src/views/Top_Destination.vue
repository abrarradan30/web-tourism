<template>
  <section class="top-destination">
    <!-- Header image -->
    <div
      class="top-header-image flex items-center justify-center text-white text-center px-4 relative"
    >
      <div class="bg-orange bg-opacity-60 p-8 rounded-xl">
        <h1 class="text-6xl md:text-7xl font-extrabold">TOP DESTINATION</h1>
        <p class="text-2xl md:text-3xl mt-6 max-w-3xl">
          Ini adalah beberapa wisata yang sudah kami pilih untuk Anda. Silakan pilih salah satu yang
          paling sesuai dengan keinginan Anda.
        </p>
      </div>
    </div>

    <!-- Judul dan jarak -->
    <div class="text-center mt-10 mb-6">
      <h2 class="text-2xl font-semibold font-serif italic tracking-wide text-gray-800">
        Wisata yang mungkin Anda suka
      </h2>
    </div>

    <!-- Kategori -->
    <div class="px-[50px]">
      <div v-for="(category, index) in categories" :key="category" class="mb-12">
        <h3 class="text-2xl font-semibold mb-6 text-black">{{ category }}</h3>
        <div class="relative group">
          <!-- Slider Container -->
          <div
            :ref="(el) => (sliders[index] = el)"
            class="flex overflow-x-hidden space-x-6 pb-1 scroll-smooth"
            @mousedown="startDrag"
            @mousemove="onDrag"
            @mouseup="endDrag"
            @mouseleave="endDrag"
            @touchstart="startDrag"
            @touchmove="onDrag"
            @touchend="endDrag"
          >
            <div
              v-for="destination in filteredDestinations(category)"
              :key="destination.id"
              class="min-w-[280px] flex-shrink-0 relative overflow-hidden rounded-2xl shadow-lg transition-all duration-300 hover:scale-[1.02] hover:shadow-xl card-container"
            >
              <div
                class="card-combined relative h-64 w-full rounded-2xl overflow-hidden group"
                @mouseenter="setActiveCard(index)"
              >
                <!-- Background Image with Zoom Effect -->
                <div
                  class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                  :style="{ backgroundImage: `url(${destination.image})` }"
                ></div>

                <!-- Gradient Overlay -->
                <div
                  class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"
                ></div>

                <!-- Content -->
                <div class="absolute inset-0 p-4 flex flex-col justify-end">
                  <div
                    class="transform transition-all duration-500 group-hover:translate-y-0 translate-y-8"
                  >
                    <router-link
                      :to="destination.route"
                      class="text-white text-xl font-bold mb-2 hover:text-orange-300 transition block"
                    >
                      {{ destination.name }}
                    </router-link>
                    <p class="text-gray-300 text-sm mb-3 line-clamp-2">
                      {{ destination.description || 'Destinasi menarik di Jawa Timur.' }}
                    </p>
                    <div
                      class="flex items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                    >
                      <button
                        class="explore-btn text-orange-300 text-sm font-medium bg-white/10 hover:bg-white/20 px-3 py-1 rounded-full transition-all"
                        @click.stop="$router.push(destination.route)"
                      >
                        Explore →
                      </button>
                    </div>
                  </div>
                </div>

                <!-- Rating Badge -->
                <div
                  class="absolute top-4 right-4 text-white px-3 py-1 rounded-full text-sm font-medium flex items-center"
                >
                  <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  4.8
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import destinations from '../views/Data/Destination'

export default {
  name: 'TopDestination',
  data() {
    return {
      categories: [
        'Wisata Alam & Petualangan',
        'Wisata Pantai & Laut',
        'Wisata Keluarga & Edukasi',
      ],
      sliders: [],
      hoveredDestinationId: null,
      destinations,
      isDragging: false,
      startX: 0,
      scrollLeft: 0,
      activeSliderIndex: null,
      isActuallyDragging: false,
      dragStartPosition: { x: 0, y: 0 },
    }
  },
  methods: {
    filteredDestinations(category) {
      return this.destinations.filter((destination) => destination.category === category)
    },

    setActiveCard(sliderIndex) {
      this.activeSliderIndex = sliderIndex
    },

    startDrag(e, index) {
      // Simpan posisi awal untuk menentukan apakah ini drag atau click
      this.dragStartPosition = {
        x: e.pageX || e.touches?.[0].pageX,
        y: e.pageY || e.touches?.[0].pageY,
      }

      this.activeSliderIndex = index
      this.isDragging = false
      this.isActuallyDragging = false

      // Set timeout untuk memberi waktu menentukan apakah ini drag
      this.dragTimeout = setTimeout(() => {
        if (!this.isActuallyDragging && this.isDragging) {
          const slider = e.currentTarget
          this.isActuallyDragging = true
          this.startX = this.dragStartPosition.x
          this.scrollLeft = slider.scrollLeft
          slider.style.cursor = 'grabbing'
          slider.style.scrollBehavior = 'auto'
          document.body.classList.add('no-select')
        }
      }, 100)
    },

    onDrag(e) {
      if (!this.isActuallyDragging) return

      e.preventDefault()
      const slider = e.currentTarget
      const x = e.pageX || e.touches?.[0].pageX
      const walk = (x - this.startX) * 1.5
      slider.scrollLeft = this.scrollLeft - walk
    },

    endDrag(e) {
      clearTimeout(this.dragTimeout)

      if (this.isActuallyDragging) {
        const slider = e.currentTarget
        slider.style.cursor = ''
        slider.style.scrollBehavior = 'smooth'
        document.body.classList.remove('no-select')

        // Snap to nearest card
        const cardWidth = 280 + 24
        const currentScroll = slider.scrollLeft
        const targetScroll = Math.round(currentScroll / cardWidth) * cardWidth
        slider.scrollTo({ left: targetScroll, behavior: 'smooth' })
      }

      this.isActuallyDragging = false
      this.isDragging = false
    },

    handleCardClick(e, destination) {
      // Jika pergerakan mouse cukup besar, anggap sebagai drag bukan click
      const moveThreshold = 5
      const dx = Math.abs(e.pageX - this.dragStartPosition.x)
      const dy = Math.abs(e.pageY - this.dragStartPosition.y)

      if (dx < moveThreshold && dy < moveThreshold) {
        this.$router.push(destination.route)
      }
    },

    getCategoryTag(category) {
      if (category.includes('Alam')) return 'Alam'
      if (category.includes('Pantai')) return 'Pantai'
      if (category.includes('Keluarga')) return 'Edukasi'
      return 'Wisata'
    },
    handleMouseEnter(id) {
      this.hoveredDestinationId = id
    },
    handleMouseLeave(id) {
      this.hoveredDestinationId = null
    },
    startDrag(e) {
      const slider = e.currentTarget
      this.isDragging = true
      this.startX = e.pageX || e.touches?.[0].pageX
      this.scrollLeft = slider.scrollLeft
      slider.style.cursor = 'grabbing'
      slider.style.scrollBehavior = 'auto'
      document.body.classList.add('no-select')
    },
    onDrag(e) {
      if (!this.isDragging) return
      e.preventDefault()
      const slider = e.currentTarget
      const x = e.pageX || e.touches?.[0].pageX
      const walk = (x - this.startX) * 1.5
      slider.scrollLeft = this.scrollLeft - walk
    },
    endDrag(e) {
      this.isDragging = false
      const slider = e.currentTarget
      slider.style.cursor = 'grab'
      slider.style.scrollBehavior = 'smooth'
      document.body.classList.remove('no-select')

      // Snap to nearest card
      const cardWidth = 280 + 24
      const currentScroll = slider.scrollLeft
      const targetScroll = Math.round(currentScroll / cardWidth) * cardWidth
      slider.scrollTo({ left: targetScroll, behavior: 'smooth' })
    },
  },
}
</script>

<style scoped>
.top-destination {
  background-color: #ffffff;
  overflow-x: hidden;
}

.top-header-image {
  position: relative;
  background-image: url('@/img/header.jpg');
  background-size: cover;
  background-position: center;
  width: 100%;
  height: 550px;
  margin-top: -40px;
}

/* Tambahkan ini ke style Anda */
.card-container {
  position: relative;
}

.card-container:hover {
  z-index: 10; /* Pastikan card yang dihover di atas yang lain */
}

.explore-btn {
  cursor: pointer !important;
}

/* Ketika slider aktif drag, nonaktifkan hover effects */
.slider-dragging .card-combined:hover {
  transform: none !important;
}

.slider-dragging .card-combined::before {
  opacity: 0 !important;
}

.slider-dragging .group-hover\:translate-y-0 {
  transform: translateY(8px) !important;
}

.slider-dragging .group-hover\:opacity-100 {
  opacity: 0 !important;
}

/* Pointer events untuk elemen interaktif */
.explore-btn,
.router-link {
  pointer-events: auto !important;
}

.card-combined {
  pointer-events: none; /* Nonaktifkan pointer events di container */
}

.card-combined > *:not(.bg-cover) {
  pointer-events: auto; /* Aktifkan kembali untuk elemen interaktif */
}

/* Hide scrollbar but allow scrolling */
.scroll-smooth {
  scrollbar-width: none;
  -ms-overflow-style: none;
}

.scroll-smooth::-webkit-scrollbar {
  display: none;
}

/* Custom cursor for dragging */
.scroll-smooth {
  cursor: grab;
}

.scroll-smooth:active {
  cursor: grabbing;
}

/* Combined Card Styles */
.card-combined {
  perspective: 1000px;
  transform-style: preserve-3d;
  transition: all 0.3s ease;
}

.card-combined:hover {
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
  transform: translateY(-5px) scale(1.02);
}

.card-combined::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.3);
  opacity: 0;
  transition: opacity 0.3s ease;
  z-index: 1;
}

.card-combined:hover::before {
  opacity: 1;
}

.parallax-bg {
  will-change: transform;
}

/* Text and content styling */
.line-clamp-2 {
  display: -webkit-box;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
  -webkit-line-clamp: 2;
  line-clamp: 2;
}

/* Animation for cards */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.min-w-\[280px\] {
  animation: fadeInUp 0.6s ease-out forwards;
  opacity: 0;
}

/* Staggered animation for cards */
.min-w-\[280px\]:nth-child(1) {
  animation-delay: 0.1s;
}
.min-w-\[280px\]:nth-child(2) {
  animation-delay: 0.2s;
}
.min-w-\[280px\]:nth-child(3) {
  animation-delay: 0.3s;
}
.min-w-\[280px\]:nth-child(4) {
  animation-delay: 0.4s;
}
.min-w-\[280px\]:nth-child(5) {
  animation-delay: 0.5s;
}

/* Utility classes */
.no-select {
  user-select: none;
  -webkit-user-select: none;
}

.backdrop-blur-sm {
  backdrop-filter: blur(4px);
}
</style>
