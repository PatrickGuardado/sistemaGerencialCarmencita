<template>
    <div class="ventas_producto flex flex-col">
      <h1 class="text-3xl font-bold text-left text-black">Panel de control</h1>
      <hr class="border-b border-gray-200 mt-2 mb-2 w-full">
    </div>
    <div class="flex justify-between items-center px-4 text-black">
      <div>
        <p><strong>Código:</strong> menuprin</p>
      </div>
      <p class="text-black">Fecha: {{ fechaActual }}</p>
    </div>
    <div class="flex justify-center px-4 mt-2" style="text-align: center;padding-top: 1rem;padding-bottom:0.5rem;">
      <p class="font-bold text-black" style="font-size: medium;">Tienda y Depósito Carmencita</p>
    </div>
    <!-- Nuevo texto debajo de "Tienda y Depósito Carmencita" -->
    <div class="flex justify-center px-4 mt-2" style="text-align: center;padding-bottom: 1rem;">
      <p class="text-black" style="font-size: medium;">¡BIENVENIDO!</p>
    </div>
    <div class="grid grid-cols-3 gap-4">
      <!-- Opciones -->
      <router-link v-for="(option, index) in options" :key="index" :to="option.route" class="w-50 h-50 border border-gray-300 rounded-lg shadow-md flex flex-col items-center" style="padding-top: 2rem;">
        <img :src="option.imgSrc" :alt="option.altText" class="w-24 h-24 object-cover mt-2">
        <p class="mt-2 text-center text-black">{{ option.text }}</p>
      </router-link>
    </div>
  </template>
  
  <script>
  import optionImg1 from '@/assets/img/reporte-de-ventas.png';
  import optionImg2 from '@/assets/img/rotacion_personal.png';
  import optionImg3 from '@/assets/img/ausentismo.png';
  import optionImg4 from '@/assets/img/ciclo-de-vida.png';
  import optionImg5 from '@/assets/img/crecimiento.png';
  
  export default {
    created() {
      document.body.style.backgroundColor = "white";
      // Establecemos la fecha actual al valor actual
      this.fechaActual = new Date().toISOString().substr(0, 10);
    },
    data() {
      return {
        fechaActual: '', // Inicializamos la fecha actual
        options: [
          {
            imgSrc: optionImg1,
            altText: 'Reporte de ventas por producto',
            text: 'Reporte de ventas por producto',
            route: '/reporte-ventas' // Ruta correspondiente para la opción 1
          },
          {
            imgSrc: optionImg2,
            altText: 'Reporte de rotación de personal mensual',
            text: 'Reporte de rotación de personal mensual',
            route: '/reporte-rotacion-personal' // Ruta correspondiente para la opción 2
          },
          {
            imgSrc: optionImg3,
            altText: 'Reporte de ausentismo laboral semanal',
            text: 'Reporte de ausentismo laboral semanal',
            route: '/reporte-ausentismo' // Ruta correspondiente para la opción 3
          },
          {
            imgSrc: optionImg4,
            altText: 'Reporte de análisis de ciclo de vida del producto',
            text: 'Reporte de análisis de ciclo de vida del producto',
            route: '/reporte-ciclo-vida' // Ruta correspondiente para la opción 4
          },
          {
            imgSrc: optionImg5,
            altText: 'Reporte de análisis de clasificación de puestos',
            text: 'Reporte de análisis de clasificación de puestos',
            route: '/reporte-clasificacion-puestos' // Ruta correspondiente para la opción 5
          }
        ]
      };
    }
  };
  </script>
  
  <style scoped>
  /* Estilos adicionales si es necesario */
  </style>
  