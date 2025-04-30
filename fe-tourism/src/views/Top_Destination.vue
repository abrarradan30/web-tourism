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
      <div
        v-for="(category, index) in categories"
        :key="category"
        class="rounded-xl p-4 shadow-md mb-8 bg-gray-300"
      >
        <h3 class="text-2xl font-semibold mb-4 text-black">{{ category }}</h3>
        <div class="flex overflow-x-auto space-x-6 pb-4">
          <div
            v-for="destination in filteredDestinations(category)"
            :key="destination.id"
            class="destination-card min-w-[250px] flex-shrink-0 group relative"
            @mouseenter="handleMouseEnter(destination.id)"
            @mouseleave="handleMouseLeave(destination.id)"
          >
            <!-- Card konten -->
            <div
              class="relative h-64 rounded-lg overflow-hidden shadow-md transition-transform duration-500 z-10"
            >
              <!-- Image with zoom effect -->
              <img
                :src="destination.image"
                :alt="destination.name"
                class="w-full h-full object-cover absolute top-0 left-0 transition-transform duration-500 group-hover:scale-110"
              />

              <!-- Deskripsi -->
              <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 p-3 z-10">
                <router-link
                  :to="destination.route"
                  class="text-white text-lg font-semibold underline hover:text-orange-300 transition"
                >
                  {{ destination.name }}
                </router-link>
                <p class="text-gray-300 text-sm">{{ destination.description }}</p>
              </div>
            </div>
          </div>
        </div>
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
  </section>
</template>

<script>
export default {
  name: 'TopDestination',
  data() {
    const images = import.meta.glob('@/img/*.{jpg,png,jpeg}', { eager: true })

    const getImage = (filename) =>
      Object.entries(images).find(([path]) => path.includes(filename))?.[1]?.default || ''

    return {
      categories: [
        'Wisata Alam & Petualangan',
        'Wisata Pantai & Laut',
        'Wisata Keluarga & Edukasi',
      ],
      destinations: [
        {
          id: 1,
          name: 'Gunung Bromo',
          image: getImage('bromo.jpg'),
          category: 'Wisata Alam & Petualangan',
          route: '/bromodetail',
        },
        {
          id: 2,
          name: 'Kawah Ijen',
          image: getImage('ijen.jpg'),
          category: 'Wisata Alam & Petualangan',
          route: '/ijendetail',
        },
        {
          id: 3,
          name: 'Air Terjun Tumpak Sewu',
          image: getImage('tumpak-sewu.jpg'),
          category: 'Wisata Alam & Petualangan',
          route: '/tumpaksewudetail',
        },
        {
          id: 4,
          name: 'Taman Nasional Baluran',
          image: getImage('baluran.jpg'),
          category: 'Wisata Alam & Petualangan',
          route: '/balurandetail',
        },
        {
          id: 5,
          name: 'Gunung Semeru',
          image: getImage('semeru.jpg'),
          category: 'Wisata Alam & Petualangan',
          route: '/semerudetail',
        },
        {
          id: 6,
          name: 'Pantai Papuma',
          image: getImage('papuma.jpg'),
          category: 'Wisata Pantai & Laut',
          route: '/papumadetail',
        },
        {
          id: 7,
          name: 'Pantai Balekambang',
          image: getImage('balekambang.jpg'),
          category: 'Wisata Pantai & Laut',
          route: '/balekambangdetail',
        },
        {
          id: 8,
          name: 'Pantai Plengkung',
          image: getImage('plengkung.jpg'),
          category: 'Wisata Pantai & Laut',
          route: '/plengkungdetail',
        },
        {
          id: 9,
          name: 'Jatim Park 1',
          image: getImage('jatim-park.jpg'),
          category: 'Wisata Keluarga & Edukasi',
          route: '/jatimparkdetail',
        },
        {
          id: 13,
          name: 'Jatim Park 2',
          image: getImage('jatim-park-2.jpg'),
          category: 'Wisata Keluarga & Edukasi',
          route: '/jatimpark2detail',
        },
        {
          id: 14,
          name: 'Jatim Park 3',
          image: getImage('jatim-park-3.jpg'),
          category: 'Wisata Keluarga & Edukasi',
          route: '/jatimpark3detail',
        },
        {
          id: 10,
          name: 'Taman Safari Prigen',
          image: getImage('safari.jpg'),
          category: 'Wisata Keluarga & Edukasi',
          route: '/safaridetail',
        },
      ],
      hoveredDestinationId: null,
    }
  },
  methods: {
    filteredDestinations(category) {
      return this.destinations.filter((destination) => destination.category === category)
    },
    handleMouseEnter(id) {
      this.hoveredDestinationId = id
    },
    handleMouseLeave(id) {
      this.hoveredDestinationId = null
    },
  },
}
</script>

<style scoped>
.top-destination {
  background-color: #ffffff;
  overflow-x: hidden;
}

img {
  transition:
    transform 0.5s ease,
    opacity 0.5s ease;
}

.destination-card::before {
  content: '';
  position: absolute;
  top: 8px;
  left: 8px;
  right: -8px;
  bottom: -8px;
  background-color: rgb(84, 84, 84);
  border-radius: 10px;
  z-index: 0;
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
</style>
