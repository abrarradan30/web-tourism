<template>
  <div :class="['container', { active: isRegister }]">
    <!-- Sign Up Form -->
    <div class="form-container sign-up">
      <form @submit.prevent="register">
        <h1>Create Account</h1>
        <div class="social-icons">
          <a
            href="#"
            class="border border-gray-300 rounded-[20%] w-10 h-10 flex items-center justify-center"
          >
            <i class="fa-brands fa-google-plus-g"></i>
          </a>
          <a
            href="#"
            class="border border-gray-300 rounded-[20%] w-10 h-10 flex items-center justify-center"
          >
            <i class="fa-brands fa-facebook-f"></i>
          </a>
          <a
            href="#"
            class="border border-gray-300 rounded-[20%] w-10 h-10 flex items-center justify-center"
          >
            <i class="fa-brands fa-github"></i>
          </a>
          <a
            href="#"
            class="border border-gray-300 rounded-[20%] w-10 h-10 flex items-center justify-center"
          >
            <i class="fa-brands fa-linkedin-in"></i>
          </a>
        </div>
        <span>or use your email for registration</span>
        <input
          v-model="registerForm.name"
          type="text"
          placeholder="Name"
          class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 placeholder-gray-500 ring-1 ring-gray-300 focus:ring-2 focus:ring-indigo-400 focus:outline-none transition"
        />
        <input
          v-model="registerForm.email"
          placeholder="Email"
          class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 placeholder-gray-500 ring-1 ring-gray-300 focus:ring-2 focus:ring-indigo-400 focus:outline-none transition"
        />
        <input
          v-model="registerForm.password"
          type="password"
          placeholder="Password"
          class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 placeholder-gray-500 ring-1 ring-gray-300 focus:ring-2 focus:ring-indigo-400 focus:outline-none transition"
        />
        <button type="submit">Sign Up</button>
      </form>
    </div>

    <!-- Sign In Form -->
    <div class="form-container sign-in">
      <form @submit.prevent="login">
        <h1>Sign In</h1>
        <div class="social-icons">
          <a
            href="#"
            class="border border-gray-300 rounded-[20%] w-10 h-10 flex items-center justify-center"
          >
            <i class="fa-brands fa-google-plus-g"></i>
          </a>
          <a
            href="#"
            class="border border-gray-300 rounded-[20%] w-10 h-10 flex items-center justify-center"
          >
            <i class="fa-brands fa-facebook-f"></i>
          </a>
          <a
            href="#"
            class="border border-gray-300 rounded-[20%] w-10 h-10 flex items-center justify-center"
          >
            <i class="fa-brands fa-github"></i>
          </a>
          <a
            href="#"
            class="border border-gray-300 rounded-[20%] w-10 h-10 flex items-center justify-center"
          >
            <i class="fa-brands fa-linkedin-in"></i>
          </a>
        </div>
        <span>or use your email password</span>
        <input
          v-model="email"
          placeholder="Email"
          class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 placeholder-gray-500 ring-1 ring-gray-300 focus:ring-2 focus:ring-indigo-400 focus:outline-none transition"
        />
        <input
          v-model="password"
          type="password"
          placeholder="Password"
          class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 placeholder-gray-500 ring-1 ring-gray-300 focus:ring-2 focus:ring-indigo-400 focus:outline-none transition"
        />
        <a href="#">Forgot your password?</a>
        <button type="submit">Sign In</button>
      </form>
    </div>

    <!-- Toggle Panels -->
    <div class="toggle-container">
      <div class="toggle">
        <div class="toggle-panel toggle-left">
          <h1>Welcome Back!</h1>
          <p>Enter your personal details to use all of site features</p>
          <button v-show="isRegister" @click="isRegister = false">Sign In</button>
        </div>
        <div class="toggle-panel toggle-right">
          <h1>Hello, Friend!</h1>
          <p>Register with your personal details to use all of site features</p>
          <button v-show="!isRegister" @click="isRegister = true">Sign Up</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, reactive } from 'vue'
import axios from 'axios'
import { useRouter } from 'vue-router'
import Cookies from 'js-cookie'

const isRegister = ref(false)
const email = ref('')
const password = ref('')
const router = useRouter()

const registerForm = reactive({
  name: '',
  email: '',
  password: '',
})

const login = async () => {
  try {
    const res = await axios.post('/login', {
      email: email.value,
      password: password.value,
    })

    const token = res.data.token
    if (token) {
      Cookies.set('token', token, { expires: 1 })
      axios.defaults.headers.common['Authorization'] = `Bearer ${token}`

      // redirect ke dashboard
      router.push('/')
    }
  } catch (error) {
    console.error('Login gagal:', error)
  }
}

const register = () => {
  console.log('Register with:', registerForm)
  // Implement register logic here
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
}

body {
  background-color: #c9d6ff;
  background: linear-gradient(to right, #e2e2e2, #c9d6ff);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  height: 100vh;
}

.container {
  background-color: #fff;
  border-radius: 30px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
  position: relative;
  overflow: hidden;
  width: 768px;
  max-width: 100%;
  min-height: 480px;
}

.container p {
  font-size: 14px;
  line-height: 20px;
  letter-spacing: 0.3px;
  margin: 20px 0;
}

.container span {
  font-size: 12px;
}

.container a {
  color: #333;
  font-size: 13px;
  text-decoration: none;
  margin: 15px 0 10px;
}

.container button {
  background-color: #512da8;
  color: #fff;
  font-size: 12px;
  padding: 10px 45px;
  border: 1px solid transparent;
  border-radius: 8px;
  font-weight: 600;
  letter-spacing: 0.5px;
  text-transform: uppercase;
  margin-top: 10px;
  cursor: pointer;
}

.container button.hidden {
  background-color: transparent;
  border-color: #fff;
}

.container form {
  background-color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 40px;
  height: 100%;
}

.container input {
  background-color: #eee;
  border: none;
  margin: 8px 0;
  padding: 10px 15px;
  font-size: 13px;
  border-radius: 8px;
  width: 100%;
  outline: none;
}

.form-container {
  position: absolute;
  top: 0;
  height: 100%;
  transition: all 0.6s ease-in-out;
}

.sign-in {
  left: 0;
  width: 50%;
  z-index: 2;
}

.container.active .sign-in {
  transform: translateX(100%);
}

.sign-up {
  left: 0;
  width: 50%;
  opacity: 0;
  z-index: 1;
}

.container.active .sign-up {
  transform: translateX(100%);
  opacity: 1;
  z-index: 5;
  animation: move 0.6s;
}

@keyframes move {
  0%,
  49.99% {
    opacity: 0;
    z-index: 1;
  }
  50%,
  100% {
    opacity: 1;
    z-index: 5;
  }
}

.social-icons {
  margin: 20px 0;
}

.social-icons a {
  border: 1px solid #ccc;
  border-radius: 20%;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  margin: 0 3px;
  width: 40px;
  height: 40px;
}

.toggle-container {
  position: absolute;
  top: 0;
  left: 50%;
  width: 50%;
  height: 100%;
  overflow: hidden;
  transition: all 0.6s ease-in-out;
  border-radius: 150px 0 0 100px;
  z-index: 1000;
}

.container.active .toggle-container {
  transform: translateX(-100%);
  border-radius: 0 150px 100px 0;
}

.toggle {
  background-color: #512da8;
  height: 100%;
  background: linear-gradient(to right, #5c6bc0, #512da8);
  color: #fff;
  position: relative;
  left: -100%;
  height: 100%;
  width: 200%;
  transform: translateX(0);
  transition: all 0.6s ease-in-out;
}

.container.active .toggle {
  transform: translateX(50%);
}

.toggle-panel {
  position: absolute;
  width: 50%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 30px;
  text-align: center;
  top: 0;
  transform: translateX(0);
  transition: all 0.6s ease-in-out;
}

.toggle-left {
  transform: translateX(-200%);
}

.container.active .toggle-left {
  transform: translateX(0);
}

.toggle-right {
  right: 0;
  transform: translateX(0);
}

.container.active .toggle-right {
  transform: translateX(200%);
}
</style>
