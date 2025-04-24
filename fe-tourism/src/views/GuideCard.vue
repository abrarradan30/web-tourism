<template>
  <div
    class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-shadow duration-300"
  >
    <div class="relative overflow-hidden h-48">
      <img
        :src="image"
        :alt="title"
        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
      />
      <div
        class="absolute inset-0 bg-black/20 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300"
      >
        <button class="bg-amber-500 hover:bg-amber-600 text-white font-bold py-2 px-6 rounded-full">
          Read Guide
        </button>
      </div>
    </div>
    <div class="p-6">
      <h3 class="text-xl font-bold text-gray-800 mb-2">{{ title }}</h3>
      <p class="text-gray-600">{{ description }}</p>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    title: String,
    description: String,
    image: String,
  },
}
</script>
