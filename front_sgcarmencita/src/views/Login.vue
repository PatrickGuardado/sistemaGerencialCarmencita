<template>
    <div class="flex justify-center items-center min-h-screen bg-gray-100 antialiased">
      <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
        <div class="flex justify-center mb-4">
          <i class="mdi mdi-account-circle text-6xl text-blue-800"></i>
        </div>
        <h2 class="text-2xl font-bold mb-6 text-center text-blue-800">Iniciar sesión</h2>
        <form @submit.prevent="login" class="space-y-4">
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Correo:</label>
            <input type="email" v-model="email" id="email" placeholder="Introduce tu correo" required
              class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent text-black placeholder-gray-400">
          </div>
          <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Contraseña:</label>
            <input type="password" v-model="password" id="password" placeholder="Introduce tu contraseña" required
              class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent text-black placeholder-gray-400">
          </div>
          <div class="flex items-center justify-between">
            <div class="flex items-center">
              <input id="remember_me" type="checkbox" v-model="rememberMe" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
              <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                Recuérdame
              </label>
            </div>
            <div class="text-sm">
              <a href="#" class="font-medium text-blue-600 hover:text-blue-500">¿Olvidaste tu contraseña?</a>
            </div>
          </div>
          <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50 flex items-center justify-center">
            <i class="mdi mdi-login mr-2"></i>
            Iniciar sesión
          </button>
        </form>
      </div>
    </div>
  </template>
  
  <script>
  import apiClient from '../axios';
  
  export default {
    data() {
      return {
        email: '',
        password: '',
        rememberMe: false,
      };
    },
    created() {
      document.body.style.backgroundColor = "white";
    },
    methods: {
      async login() {
        try {
          const response = await apiClient.post('/login', {
            email: this.email,
            password: this.password,
            remember_me: this.rememberMe,
          });
          localStorage.setItem('auth_token', response.data.access_token);
          this.$router.push('/');
        } catch (error) {
          console.error('Login failed', error);
        }
      },
    },
  };
  </script>
  
  <style scoped>
  /* Asegúrate de que la fuente utilizada sea adecuada y esté correctamente configurada */
  body {
    font-family: 'Inter', sans-serif;
  }
  </style>  