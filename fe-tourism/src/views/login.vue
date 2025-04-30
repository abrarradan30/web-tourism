<template>
  <div
    class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-300 to-purple-300"
  >
    <div class="bg-white p-8 rounded-2xl shadow-2xl w-full max-w-md">
      <h1 class="text-3xl font-bold text-center text-indigo-700 mb-8">Login Admin</h1>

      <!-- Warning message -->
      <div
        v-if="showWarning"
        class="mb-6 p-4 bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 rounded"
      >
        <p>Anda harus login terlebih dahulu untuk mengakses halaman tersebut!</p>
      </div>

      <form @submit.prevent="login" class="flex justify-center gap-3 mb-6 relative">
        <input
          v-for="(digit, index) in pinDigits"
          :key="index"
          ref="inputs"
          :type="showPin ? 'text' : 'password'"
          maxlength="1"
          class="w-14 h-14 text-2xl text-center border-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:outline-none transition duration-200"
          v-model="pinDigits[index]"
          @input="handleInput(index, $event)"
          @keydown.backspace="handleBackspace(index, $event)"
        />

        <!-- Tombol toggle show/hide -->
        <button
          type="button"
          @click="togglePin"
          class="absolute -right-5 top-1/2 -translate-y-1/2 text-gray-500 hover:text-indigo-600 transition"
        >
          <i :class="showPin ? 'ri-eye-off-line' : 'ri-eye-line'" class="text-2xl"></i>
        </button>
      </form>

      <button
        @click="login"
        class="w-full bg-indigo-600 text-white text-lg font-semibold py-3 rounded-xl hover:bg-indigo-700 transition duration-200 shadow-md"
      >
        Masuk
      </button>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, nextTick } from 'vue'
import { useRouter } from 'vue-router'
import Cookies from 'js-cookie'
import { supabase } from '../config/supabase'

const pinDigits = ref(['', '', '', '', ''])
const inputs = ref([])
const showPin = ref(false)
const showWarning = ref(false)
const router = useRouter()

// Check for warning message from route state
if (history.state?.showWarning) {
  showWarning.value = true
}

const handleInput = (index, event) => {
  const value = event.target.value
  if (!/^\d$/.test(value)) {
    pinDigits.value[index] = ''
    return
  }

  pinDigits.value[index] = value
  if (index < 4) {
    nextTick(() => {
      inputs.value[index + 1]?.focus()
    })
  }
}

const handleBackspace = (index, event) => {
  if (pinDigits.value[index] === '') {
    if (index > 0) {
      nextTick(() => {
        inputs.value[index - 1]?.focus()
      })
    }
  }
}

const togglePin = () => {
  showPin.value = !showPin.value
}

const login = async () => {
  const pin = pinDigits.value.join('')
  if (pin.length < 5) {
    alert('Masukkan PIN lengkap')
    return
  }

  const { data, error } = await supabase.from('admin').select('*').eq('pin', pin).single()

  if (error || !data) {
    alert('PIN salah!')
    pinDigits.value = ['', '', '', '', '']
    inputs.value[0]?.focus()
    return
  }

  // Pastikan cookie diset dengan benar
  Cookies.set('admin_token', data.id, {
    expires: 1, // Kadaluarsa 1 hari
    secure: process.env.NODE_ENV === 'production', // Secure di production
    sameSite: 'strict', // Untuk keamanan
  })

  // Redirect ke intended route atau dashboard default
  const redirectPath = router.currentRoute.value.query.redirect || '/dashboard'
  router.push(redirectPath)
}

onMounted(() => {
  nextTick(() => {
    inputs.value[0]?.focus()
  })
})
</script>
