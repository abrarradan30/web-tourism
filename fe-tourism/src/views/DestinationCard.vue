<template>
  <div class="relative group overflow-hidden rounded-xl shadow-lg">
    <img
      :src="image"
      :alt="title"
      class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110"
    />
    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-6">
      <div>
        <h3 class="text-white text-xl font-bold mb-2">{{ title }}</h3>
        <p class="text-gray-200">{{ description }}</p>
      </div>
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
