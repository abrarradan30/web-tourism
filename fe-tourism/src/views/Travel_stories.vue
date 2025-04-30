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
  
      <!-- Featured Destinations Section -->
      <div class="container mx-auto px-4 py-20 mt-16">
        <section class="mb-20 text-center">
          <h1 class="text-4xl font-bold text-gray-800 mb-4">Pesona Jawa Timur: Destinasi Favorit Wisatawan</h1>
          <p class="text-gray-600 max-w-2xl mx-auto mb-12">
            Berikut ini adalah tempat wisata di Jawa Timur yang paling banyak dikunjungi wisatawan
          </p>
  
          <!-- Destination Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 justify-center">
  <!-- Jawa Timur Park 1 -->
  <div class="bg-gray-100 rounded-md overflow-hidden shadow-md p-4 max-w-sm mx-auto">
    <img
      class="w-full h-64 object-cover rounded-md transform transition-transform duration-300 hover:scale-105"
      src="https://atourin.obs.ap-southeast-3.myhuaweicloud.com/images/destination/batu/jawa-timur-park-1-profile1654443114.jpeg?x-image-process=image/resize,p_100,limit_1/imageslim"
      alt="Mountain sunrise"
    />
    <div class="mt-4">
      <h2 class="text-lg font-serif font-semibold text-black">Jawa Timur Park 1</h2>
      <div class="flex items-center mt-1">
        <!-- Bintang Rating -->
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span> <!-- Bintang kosong -->
        <span class="ml-2 text-sm text-gray-600">(5.0)</span> <!-- Rating text -->
      </div>
      <p class="text-sm text-gray-600 mt-1">
        Taman hiburan dengan wahana, tempat makan, & pameran/pertunjukan budaya tradisional Indonesia.
      </p>
      <button
        class="mt-4 px-4 py-2 bg-amber-500 text-white text-xs font-semibold rounded-md uppercase tracking-wide hover:bg-amber-600"
      >
        REVIEW
      </button>
    </div>
  </div>  

  <!-- Jawa Timur Park 2 -->
  <div class="bg-gray-100 rounded-md overflow-hidden shadow-md p-4 max-w-sm mx-auto">
    <img
      class="w-full h-64 object-cover rounded-md transform transition-transform duration-300 hover:scale-105"
      src="https://4.bp.blogspot.com/-hMQVNejoB9c/VRuApWg7v-I/AAAAAAAAAsU/Zx0E2hQ7abA/s1600/Batu%2BSecret%2BZoo.jpg"
      alt="Mountain sunrise"
    />
    <div class="mt-4">
      <h2 class="text-lg font-serif font-semibold text-black">Jawa Timur Park 2</h2>
      <div class="flex items-center mt-1">
        <!-- Bintang Rating -->
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-gray-300">&#9733;</span> <!-- Bintang kosong -->
        <span class="ml-2 text-sm text-gray-600">(4.5)</span> <!-- Rating text -->
      </div>
      <p class="text-sm text-gray-600 mt-1">
        Taman hiburan dengan kegiatan pendidikan seputar ilmu pengetahuan alam & biologi, termasuk kebun binatang.  
      </p>
      <button
        class="mt-4 px-4 py-2 bg-amber-500 text-white text-xs font-semibold rounded-md uppercase tracking-wide hover:bg-amber-600"
      >
        REVIEW
      </button>
    </div>
  </div>

  <!-- Jawa Timur Park 3 -->
  <div class="bg-gray-100 rounded-md overflow-hidden shadow-md p-4 max-w-sm mx-auto">
    <img
      class="w-full h-64 object-cover rounded-md transform transition-transform duration-300 hover:scale-105"
      src="https://mundomaya.travel/wp-content/uploads/2023/01/Dino-Park-jatim-park-3.webp"
      alt="Mountain sunrise"
    />
    <div class="mt-4">
      <h2 class="text-lg font-serif font-semibold text-black">Jawa Timur Park 3</h2>
      <div class="flex items-center mt-1">
        <!-- Bintang Rating -->
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-gray-300">&#9733;</span> <!-- Bintang kosong -->
        <span class="ml-2 text-sm text-gray-600">(4.6)</span> <!-- Rating text -->
      </div>
      <p class="text-sm text-gray-600 mt-1">
        Tempat ini menawarkan berbagai wahana menarik, mulai dari taman bertema dinosaurus hingga museum musik.​
      </p>
      <button
        class="mt-4 px-4 py-2 bg-amber-500 text-white text-xs font-semibold rounded-md uppercase tracking-wide hover:bg-amber-600"
      >
        REVIEW
      </button>
    </div>
  </div>

  <!-- Wisata Bahari Lamongan -->
  <div class="bg-gray-100 rounded-md overflow-hidden shadow-md p-4 max-w-sm mx-auto">
    <img
      class="w-full h-64 object-cover rounded-md transform transition-transform duration-300 hover:scale-105"
      src="https://bacotsekali.sgp1.digitaloceanspaces.com/cityawesome/uploads/2023/02/image-10.png"
      alt="Pantai Ngliyep"
    />
    <div class="mt-4">
      <h2 class="text-lg font-serif font-semibold text-black">Wisata Bahari Lamongan</h2>
      <div class="flex items-center mt-1">
        <!-- Bintang Rating -->
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span> <!-- Bintang kosong -->
        <span class="text-gray-300">&#9733;</span> <!-- Bintang kosong -->
        <span class="ml-2 text-sm text-gray-600">(4.5)</span> <!-- Rating text -->
      </div>
      <p class="text-sm text-gray-600 mt-1">
        Tempat ini menggabungkan keindahan pantai dengan berbagai wahana seru, menjadikannya destinasi favorit bagi wisatawan lokal maupun luar kota.​
      </p>
      <button
        class="mt-4 px-4 py-2 bg-amber-500 text-white text-xs font-semibold rounded-md uppercase tracking-wide hover:bg-amber-600"
      >
        REVIEW
      </button>
    </div>
  </div>

    <!-- Taman Safari Prigen -->
    <div class="bg-gray-100 rounded-md overflow-hidden shadow-md p-4 max-w-sm mx-auto">
    <img
      class="w-full h-64 object-cover rounded-md transform transition-transform duration-300 hover:scale-105"
      src="https://thumbs.dreamstime.com/b/vacation-to-taman-safari-zoo-jawa-timur-indonesia-266781358.jpg"
      alt="Coban Rondo Waterfall"
    />
    <div class="mt-4">
      <h2 class="text-lg font-serif font-semibold text-black">Taman Safari Indonesia II</h2>
      <div class="flex items-center mt-1">
        <!-- Bintang Rating -->
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span> <!-- Bintang kosong -->
        <span class="text-gray-300">&#9733;</span> <!-- Bintang kosong -->
        <span class="ml-2 text-sm text-gray-600">(4.2)</span> <!-- Rating text -->
      </div>
      <p class="text-sm text-gray-600 mt-1">
        Kebun binatang ini dibangun di atas lahan seluas 350 hektar, sehingga menjadikannya sebagai taman safari terbesar di kawasan Asia Tenggara.
      </p>
      <button
        class="mt-4 px-4 py-2 bg-amber-500 text-white text-xs font-semibold rounded-md uppercase tracking-wide hover:bg-amber-600"
      >
        REVIEW
      </button>
    </div>
  </div>

  <!-- Kebun Binatang Surabaya -->
  <div class="bg-gray-100 rounded-md overflow-hidden shadow-md p-4 max-w-sm mx-auto">
    <img
      class="w-full h-64 object-cover rounded-md transform transition-transform duration-300 hover:scale-105"
      src="https://live.staticflickr.com/2807/9075160405_db3a920f6c_b.jpg"
      alt="Museum Angkut"
    />
    <div class="mt-4">
      <h2 class="text-lg font-serif font-semibold text-black">Kebun Binatang Surabaya</h2>
      <div class="flex items-center mt-1">
        <!-- Bintang Rating -->
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-gray-300">&#9733;</span> <!-- Bintang kosong -->
        <span class="ml-2 text-sm text-gray-600">(4.5)</span> <!-- Rating text -->
      </div>
      <p class="text-sm text-gray-600 mt-1">
        Kebun binatang yang didirikan tahun 1918 ini memiliki berbagai jenis hewan seperti singa, beruang, & komodo dan masih banyak hewan lainnya.
      </p>
      <button
        class="mt-4 px-4 py-2 bg-amber-500 text-white text-xs font-semibold rounded-md uppercase tracking-wide hover:bg-amber-600"
      >
        REVIEW
      </button>
    </div>
  </div>

  <!-- Pantai Bale Kambang -->
  <div class="bg-gray-100 rounded-md overflow-hidden shadow-md p-4 max-w-sm mx-auto">
    <img
      class="w-full h-64 object-cover rounded-md transform transition-transform duration-300 hover:scale-105"
      src="https://i.pinimg.com/originals/71/55/cf/7155cf739907b777edaf9a2bffd7acc4.jpg"
      alt="Zoo adventure"
    />
    <div class="mt-4">
      <h2 class="text-lg font-serif font-semibold text-black">Pantai Bale Kambang</h2>
      <div class="flex items-center mt-1">
        <!-- Bintang Rating -->
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span> <!-- Bintang kosong -->
        <span class="text-gray-300">&#9733;</span> <!-- Bintang kosong -->
        <span class="ml-2 text-sm text-gray-600">(4.5)</span> <!-- Rating text -->
      </div>
      <p class="text-sm text-gray-600 mt-1">
        Pura yang dapat dijangkau dengan jembatan kayu kecil saat air pasang di pantai berpasir dengan aktivitas air.
      </p>
      <button
        class="mt-4 px-4 py-2 bg-amber-500 text-white text-xs font-semibold rounded-md uppercase tracking-wide hover:bg-amber-600"
      >
        REVIEW
      </button>
    </div>
  </div>

  <!-- Pantai Goa Cina -->
  <div class="bg-gray-100 rounded-md overflow-hidden shadow-md p-4 max-w-sm mx-auto">
    <img
      class="w-full h-64 object-cover rounded-md transform transition-transform duration-300 hover:scale-105"
      src="https://media.istockphoto.com/id/1222116464/photo/batu-leter-tropical-beach-in-east-java-indonesia.jpg?s=612x612&w=0&k=20&c=6sRUgtVYn-F54DAurVZ73lmVl3FJwFM1nfJckZYdiYQ="
      alt="Museum Tubuh"
    />
    <div class="mt-4">
      <h2 class="text-lg font-serif font-semibold text-black">Pantai Goa Cina</h2>
      <div class="flex items-center mt-1">
        <!-- Bintang Rating -->
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-gray-300">&#9733;</span> <!-- Bintang kosong -->
        <span class="ml-2 text-sm text-gray-600">(4.5)</span> <!-- Rating text -->
      </div>
      <p class="text-sm text-gray-600 mt-1">
        Pantai tenang dengan arus yang kuat, dengan bebatuan kapur, sawah & gua legendaris.
      </p>
      <button
        class="mt-4 px-4 py-2 bg-amber-500 text-white text-xs font-semibold rounded-md uppercase tracking-wide hover:bg-amber-600"
      >
        REVIEW
      </button>
    </div>
  </div>

  <!-- Pantai Sendiki -->
  <div class="bg-gray-100 rounded-md overflow-hidden shadow-md p-4 max-w-sm mx-auto">
    <img
      class="w-full h-64 object-cover rounded-md transform transition-transform duration-300 hover:scale-105"
      src="https://th.bing.com/th/id/R.199f09f90b1b6b04b99ae83cde514420?rik=fikujcikF3ZSqw&riu=http%3a%2f%2f3.bp.blogspot.com%2f-s7kPwyG7E-A%2fVpsE-oIAlMI%2fAAAAAAAAMCA%2fBBzC3Fjy5M4%2fs1600%2fP_20151230_085700.jpg&ehk=EIi2p2YmT8xEIqYXxjVNDk7Qf%2bA9BWu%2fzEAe8OpPAcE%3d&risl=&pid=ImgRaw&r=0"
      alt="Eco Green Park"
    />
    <div class="mt-4">
      <h2 class="text-lg font-serif font-semibold text-black">Pantai Sendiki</h2>
      <div class="flex items-center mt-1">
        <!-- Bintang Rating -->
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-gray-300">&#9733;</span> <!-- Bintang kosong -->
        <span class="ml-2 text-sm text-gray-600">(4.6)</span> <!-- Rating text -->
      </div>
      <p class="text-sm text-gray-600 mt-1">
        Pantai berpasir & berlatar belakang hutan lebat dengan tempat kemah, & pemandangan matahari terbenam.
      </p>
      <button
        class="mt-4 px-4 py-2 bg-amber-500 text-white text-xs font-semibold rounded-md uppercase tracking-wide hover:bg-amber-600"
      >
        REVIEW
      </button>
    </div>
  </div>

<!-- Air Terjun Tumpak Sewu -->
<div class="bg-gray-100 rounded-md overflow-hidden shadow-md p-4 max-w-sm mx-auto">
    <img
      class="w-full h-64 object-cover rounded-md transform transition-transform duration-300 hover:scale-105"
      src="https://turisian.com/wp-content/uploads/2022/08/Tumpak-Sewu-atau-Coban-Sewu.-iStock.jpg"
      alt="Eco Green Park"
    />
    <div class="mt-4">
      <h2 class="text-lg font-serif font-semibold text-black">Air Terjun Tumpak Sewu</h2>
      <div class="flex items-center mt-1">
        <!-- Bintang Rating -->
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span> <!-- Bintang kosong -->
        <span class="ml-2 text-sm text-gray-600">(5.0)</span> <!-- Rating text -->
      </div>
      <p class="text-sm text-gray-600 mt-1">
        Air terjun bertingkat yang besar & populer ini berada di ngarai rimbun, dapat diakses dengan jalur pendakian.
      </p>
      <button
        class="mt-4 px-4 py-2 bg-amber-500 text-white text-xs font-semibold rounded-md uppercase tracking-wide hover:bg-amber-600"
      >
        REVIEW
      </button>
    </div>
  </div>


      <!-- Air Terjun Madakaripura -->
      <div class="bg-gray-100 rounded-md overflow-hidden shadow-md p-4 max-w-sm mx-auto">
    <img
      class="w-full h-64 object-cover rounded-md transform transition-transform duration-300 hover:scale-105"
      src="https://asset.kompas.com/crops/epNCHYLyaD7RKgxOyFy8-RcgO1U=/0x0:1000x667/750x500/data/photo/2022/01/19/61e811a2ca63a.jpg"
      alt="Eco Green Park"
    />
    <div class="mt-4">
      <h2 class="text-lg font-serif font-semibold text-black">Air Terjun Madakaripura</h2>
      <div class="flex items-center mt-1">
        <!-- Bintang Rating -->
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-gray-300">&#9733;</span> <!-- Bintang kosong -->
        <span class="ml-2 text-sm text-gray-600">(4.0)</span> <!-- Rating text -->
      </div>
      <p class="text-sm text-gray-600 mt-1">
        Air terjun setinggi 200 m dengan arus yang seperti hujan turun di dinding ngarai silindris yang hijau.
      </p>
      <button
        class="mt-4 px-4 py-2 bg-amber-500 text-white text-xs font-semibold rounded-md uppercase tracking-wide hover:bg-amber-600"
      >
        REVIEW
      </button>
    </div>
  </div>

        <!-- Air Terjun Coban Rondo -->
        <div class="bg-gray-100 rounded-md overflow-hidden shadow-md p-4 max-w-sm mx-auto">
    <img
      class="w-full h-64 object-cover rounded-md transform transition-transform duration-300 hover:scale-105"
      src="https://asset.kompas.com/crops/I7oFQpIqNNTHErjAoGMfvNL3asg=/0x0:1149x766/750x500/data/photo/2021/08/25/6126168e3be6b.jpg"
      alt="Eco Green Park"
    />
    <div class="mt-4">
      <h2 class="text-lg font-serif font-semibold text-black">Air Terjun Coban Rondo</h2>
      <div class="flex items-center mt-1">
        <!-- Bintang Rating -->
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-gray-300">&#9733;</span> <!-- Bintang kosong -->
        <span class="ml-2 text-sm text-gray-600">(4.5)</span> <!-- Rating text -->
      </div>
      <p class="text-sm text-gray-600 mt-1">
        Air terjun alami yang mudah diakses dengan pemandangan tropis, kursi piknik, & sewa sepeda.
      </p>
      <button
        class="mt-4 px-4 py-2 bg-amber-500 text-white text-xs font-semibold rounded-md uppercase tracking-wide hover:bg-amber-600"
      >
        REVIEW
      </button>
    </div>
  </div>

          <!-- Gunung Bromo -->
          <div class="bg-gray-100 rounded-md overflow-hidden shadow-md p-4 max-w-sm mx-auto">
    <img
      class="w-full h-64 object-cover rounded-md transform transition-transform duration-300 hover:scale-105"
      src="https://www.duniart.com/wp-content/uploads/2020/03/Bromo-0506-2015-414-scaled-scaled.jpg"
      alt="Eco Green Park"
    />
    <div class="mt-4">
      <h2 class="text-lg font-serif font-semibold text-black">Gunung Bromo</h2>
      <div class="flex items-center mt-1">
        <!-- Bintang Rating -->
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-gray-300">&#9733;</span> <!-- Bintang kosong -->
        <span class="ml-2 text-sm text-gray-600">(4.5)</span> <!-- Rating text -->
      </div>
      <p class="text-sm text-gray-600 mt-1">
        Gunung vulkanis yang indah di Taman Nasional Bromo Tengger Semeru ini dilengkapi tangga hingga ke atas kawah.
      </p>
      <button
        class="mt-4 px-4 py-2 bg-amber-500 text-white text-xs font-semibold rounded-md uppercase tracking-wide hover:bg-amber-600"
      >
        REVIEW
      </button>
    </div>
  </div>  

          <!-- Gunung Welirang -->
          <div class="bg-gray-100 rounded-md overflow-hidden shadow-md p-4 max-w-sm mx-auto">
    <img
      class="w-full h-64 object-cover rounded-md transform transition-transform duration-300 hover:scale-105"
      src="https://getlost.id/wp-content/uploads/2021/03/arjuno-welirang_1360257812.jpeg"
      alt="Eco Green Park"
    />
    <div class="mt-4">
      <h2 class="text-lg font-serif font-semibold text-black">Gunung Welirang</h2>
      <div class="flex items-center mt-1">
        <!-- Bintang Rating -->
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-gray-300">&#9733;</span> <!-- Bintang kosong -->
        <span class="ml-2 text-sm text-gray-600">(4.5)</span> <!-- Rating text -->
      </div>
      <p class="text-sm text-gray-600 mt-1">
        Destinasi pegunungan populer untuk berkemah & mendaki, yang juga menawarkan pemandangan yang indah.
      </p>
      <button
        class="mt-4 px-4 py-2 bg-amber-500 text-white text-xs font-semibold rounded-md uppercase tracking-wide hover:bg-amber-600"
      >
        REVIEW
      </button>
    </div>
  </div>

          <!-- Gunung Lawu -->
          <div class="bg-gray-100 rounded-md overflow-hidden shadow-md p-4 max-w-sm mx-auto">
    <img
      class="w-full h-64 object-cover rounded-md transform transition-transform duration-300 hover:scale-105"
      src="https://getlost.id/wp-content/uploads/2020/11/lawu_1230179785.jpg"
      alt="Eco Green Park"
    />
    <div class="mt-4">
      <h2 class="text-lg font-serif font-semibold text-black">Gunung Lawu </h2>
      <div class="flex items-center mt-1">
        <!-- Bintang Rating -->
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-yellow-500">&#9733;</span>
        <span class="text-gray-300">&#9733;</span> <!-- Bintang kosong -->
        <span class="ml-2 text-sm text-gray-600">(4.6)</span> <!-- Rating text -->
      </div>
      <p class="text-sm text-gray-600 mt-1">
        Gunung berapi kerucut yang besar untuk mendaki, dengan pemandangan awan dan restoran simpel di gunung.
      </p>
      <button
        class="mt-4 px-4 py-2 bg-amber-500 text-white text-xs font-semibold rounded-md uppercase tracking-wide hover:bg-amber-600"
      >
        REVIEW
      </button>
    </div>
  </div>
  
</div>

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
  </style>
