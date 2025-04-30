<template>
    <div class="min-h-screen bg-white">
      <!-- Hero Section with Video Background -->
      <div class="relative h-screen">
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
        <Transition name="fade" appear>
          <div class="relative z-10 h-full flex flex-col justify-center items-center text-center px-4">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">TRAVEL STORIES</h1>
            <p class="text-xl text-white max-w-2xl mb-8">
              Every step carries a story, every place holds memories.
            </p>
          </div>
        </Transition>
      </div>
      <div class="min-h-screen bg-white text-gray-800">
    <div class="container mx-auto px-4 py-20">
      <h1 class="text-4xl font-bold text-center mb-8">Tentang EAST JAVA</h1>
      <p class="text-lg max-w-3xl mx-auto text-center mb-12 leading-relaxed">
        <strong>EAST JAVA</strong> adalah platform rekomendasi wisata yang menyajikan keindahan dan kekayaan destinasi di Jawa Timur.
        Kami hadir untuk mempermudah wisatawan dalam menemukan tempat-tempat menarik, mulai dari wisata alam, budaya, kuliner, hingga sejarah.
      </p>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        <!-- Visi -->
        <div>
          <h2 class="text-2xl font-semibold mb-4">Visi Kami</h2>
          <p class="text-gray-700 leading-relaxed">
            Menjadi sumber terpercaya dalam memberikan informasi wisata terbaik di Jawa Timur, serta mendorong pertumbuhan pariwisata lokal dengan teknologi.
          </p>
        </div>

        <!-- Misi -->
        <div>
          <h2 class="text-2xl font-semibold mb-4">Misi Kami</h2>
          <ul class="list-disc list-inside text-gray-700 leading-relaxed space-y-2">
            <li>Menyediakan informasi destinasi yang akurat, menarik, dan mudah diakses.</li>
            <li>Membantu wisatawan merencanakan perjalanan yang berkesan di Jawa Timur.</li>
            <li>Mendukung pengrajin lokal, UMKM, dan pelaku wisata daerah.</li>
            <li>Menggabungkan teknologi dan budaya untuk memperkenalkan pesona Jawa Timur ke dunia.</li>
          </ul>
        </div>
      </div>

      <!-- Tim -->
      <div class="mt-20">
        <h2 class="text-2xl font-semibold text-center mb-6">Tim Kami</h2>
        <p class="text-center text-gray-700 max-w-2xl mx-auto mb-8">
          EAST JAVA dikembangkan oleh tim muda yang mencintai budaya lokal dan teknologi. Kami percaya pariwisata adalah jembatan antara alam, budaya, dan manusia.
        </p>
        <!-- Bisa ditambahkan gambar atau nama anggota tim -->
      </div>
    </div>
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
  </style>
