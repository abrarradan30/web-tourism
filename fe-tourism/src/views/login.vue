<script>
import axios from 'axios'

export default {
  data() {
    return {
      email: '',
      password: '',
      error: '',
    }
  },
  methods: {
    async login() {
      try {
        const response = await axios.post('http://127.0.0.1:8000/api/user', {
          email: this.email,
          password: this.password,
        })

        // Misalnya simpan user ke localStorage
        localStorage.setItem('user', JSON.stringify(response.data.user))

        // Arahkan ke halaman lain
        this.$router.push('/dashboard')
      } catch (error) {
        this.error = 'Email atau password salah'
      }
    },
  },
}
</script>

<template>
  <div class="max-w-md mx-auto p-4">
    <h2 class="text-xl mb-4">Login</h2>
    <input v-model="email" placeholder="Email" class="border p-2 w-full mb-2" />
    <input
      v-model="password"
      type="password"
      placeholder="Password"
      class="border p-2 w-full mb-2"
    />
    <button @click="login" class="bg-blue-500 text-white px-4 py-2">Login</button>
    <p v-if="error" class="text-red-500 mt-2">{{ error }}</p>
  </div>
</template>
