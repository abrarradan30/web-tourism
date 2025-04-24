<script>
import DestinationCard from './DestinationCard.vue'
import ExperienceCard from './ExperienceCard.vue'
import GuideCard from './GuideCard.vue'

export default {
  components: {
    DestinationCard,
    ExperienceCard,
    GuideCard,
  },
  data() {
    return {
      featuredDestinations: [
        {
          title: 'Bali',
          description: 'The Island of Gods with stunning beaches and rich culture.',
          image: '../img/komodo_island.jpeg',
        },
        {
          title: 'Raja Ampat',
          description: 'Paradise for divers with the most biodiverse marine life.',
          image:
            'https://images.unsplash.com/photo-1589394815804-964ed0be2eb5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80',
        },
        {
          title: 'Yogyakarta',
          description: 'Cultural heart of Java with ancient temples and traditions.',
          image: '../img/yogyakarta.jpg',
        },
        {
          title: 'Komodo Island',
          description: 'Home of the legendary Komodo dragons and pink beaches.',
          image: '../img/komodo_island.jpeg',
        },
      ],
      experiences: [
        {
          title: 'Cultural Heritage',
          description: 'Explore ancient temples, traditional dances, and local crafts.',
          image:
            'https://images.unsplash.com/photo-1542051841857-5f90071e7989?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
        },
        {
          title: 'Nature & Wildlife',
          description: 'Discover rainforests, volcanoes, and unique wildlife.',
          image:
            'https://images.unsplash.com/photo-1526779259212-939e64788e3c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2073&q=80',
        },
        {
          title: 'Beach & Islands',
          description: 'Relax on pristine beaches and explore tropical islands.',
          image:
            'https://images.unsplash.com/photo-1505228395891-9a51e7e86bf6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2053&q=80',
        },
      ],
      travelGuides: [
        {
          title: 'Bali Travel Guide',
          description: 'Everything you need to know for your Bali adventure.',
          image:
            'https://images.unsplash.com/photo-1537996194471-e657df975ab4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1938&q=80',
        },
        {
          title: 'Java Heritage Trail',
          description: 'Explore the cultural treasures of Central Java.',
          image:
            'https://images.unsplash.com/photo-1565049784320-9c9655bf2325?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80',
        },
        {
          title: 'Sumatra Wildlife',
          description: 'Discover orangutans and jungles in Sumatra.',
          image:
            'https://images.unsplash.com/photo-1587135991058-881a798fb6d8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80',
        },
      ],
    }
  },
}
</script>

<template>
  <div class="min-h-screen bg-white">
    <!-- Hero Section -->
    <div class="relative h-screen">
      <!-- Background Image with overlay -->
      <div class="absolute inset-0 bg-black/50 z-0"></div>
      <img
        src="https://images.unsplash.com/photo-1503917988258-f87a78e3c995?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80"
        alt="Beautiful Indonesia"
        class="absolute inset-0 w-full h-full object-cover z-0"
      />
      <!-- Hero Content -->
      <div class="relative z-10 h-full flex flex-col justify-center items-center text-center px-4">
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">WONDERFUL INDONESIA</h1>
        <p class="text-xl text-white max-w-2xl mb-8">
          Discover the enchanting beauty of Indonesia's diverse cultures, breathtaking landscapes,
          and pristine beaches.
        </p>
        <div class="flex flex-col sm:flex-row gap-4">
          <button
            class="bg-amber-500 hover:bg-amber-600 text-white font-bold py-3 px-8 rounded-full transition duration-300"
          >
            Explore Destinations
          </button>
          <button
            class="bg-transparent border-2 border-white hover:bg-white/20 text-white font-bold py-3 px-8 rounded-full transition duration-300"
          >
            Watch Video
          </button>
        </div>
      </div>

      <!-- Search Bar -->
      <div
        class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-1/2 z-10 w-full max-w-4xl px-4"
      >
        <div class="bg-white rounded-lg shadow-xl p-4">
          <div class="flex flex-col md:flex-row gap-4">
            <div class="flex-1">
              <label class="block text-gray-700 text-sm font-bold mb-1">Destination</label>
              <input
                type="text"
                placeholder="Where to?"
                class="w-full p-3 border border-gray-300 rounded-lg"
              />
            </div>
            <div class="flex-1">
              <label class="block text-gray-700 text-sm font-bold mb-1">Experience</label>
              <select class="w-full p-3 border border-gray-300 rounded-lg">
                <option>All Experiences</option>
                <option>Beaches</option>
                <option>Culture</option>
                <option>Nature</option>
              </select>
            </div>
            <div class="flex items-end">
              <button
                class="bg-amber-500 hover:bg-amber-600 text-white font-bold py-3 px-6 rounded-lg w-full h-[50px]"
              >
                Search
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-20 mt-16">
      <section class="mb-20">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-gray-800 mb-4">Featured Destinations</h2>
          <p class="text-gray-600 max-w-2xl mx-auto">
            Explore Indonesia's most captivating destinations that offer unforgettable experiences.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          <DestinationCard
            v-for="(destination, index) in featuredDestinations"
            :key="index"
            :title="destination.title"
            :description="destination.description"
            :image="destination.image"
          />
        </div>
      </section>

      <!-- Experiences Section -->
      <section class="mb-20">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-gray-800 mb-4">Unique Experiences</h2>
          <p class="text-gray-600 max-w-2xl mx-auto">
            Immerse yourself in Indonesia's rich culture and breathtaking nature.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <ExperienceCard
            v-for="(experience, index) in experiences"
            :key="index"
            :title="experience.title"
            :description="experience.description"
            :image="experience.image"
          />
        </div>
      </section>

      <section class="mb-20">
        <div class="bg-gray-100 rounded-xl overflow-hidden">
          <div class="flex flex-col lg:flex-row">
            <div class="lg:w-2/3">
              <div class="relative pt-[56.25%]">
                <iframe
                  class="absolute top-0 left-0 w-full h-full"
                  src="https://www.youtube.com/embed/2OI0R1GV4gI"
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

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <GuideCard
            v-for="(guide, index) in travelGuides"
            :key="index"
            :title="guide.title"
            :description="guide.description"
            :image="guide.image"
          />
        </div>
      </section>
    </div>

    <section class="bg-gray-100 py-16">
      <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Get Travel Inspiration</h2>
        <p class="text-gray-600 max-w-2xl mx-auto mb-8">
          Subscribe to our newsletter for the latest travel tips, deals, and destination highlights.
        </p>
        <div class="max-w-md mx-auto flex">
          <input
            type="email"
            placeholder="Your email address"
            class="flex-1 p-3 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-amber-500"
          />
          <button
            class="bg-amber-500 hover:bg-amber-600 text-white font-bold py-3 px-6 rounded-r-lg"
          >
            Subscribe
          </button>
        </div>
      </div>
    </section>
  </div>
</template>
