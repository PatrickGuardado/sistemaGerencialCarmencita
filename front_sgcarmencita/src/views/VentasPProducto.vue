<template>
    <div class="ventas_producto flex flex-col">
      <h1 class="text-3xl font-bold text-left text-blue-800">Reporte de ventas por producto</h1>
  
      <hr class="border-b border-gray-200 mt-2 mb-2 w-full">
  
      <div class="flex justify-between items-center px-4 text-black">
        <div>
          <p><strong>Código:</strong> repvpp</p>
          <label for="fecha-inicio"><strong>Fecha de Inicio:</strong></label>
          <input id="fecha-inicio" type="date" v-model="fechaInicio" class="ml-2 border border-gray-300 rounded px-3 py-2">
          <label for="fecha-fin" style="padding-left:1rem;"><strong>Fecha de Fin:</strong></label>
          <input id="fecha-fin" type="date" v-model="fechaFin" class="ml-2 border border-gray-300 rounded px-3 py-2">
        </div>
        <p class="text-black">Fecha: {{ fechaActual }}</p>
      </div>
  
      <div class="flex justify-between px-4 mt-2" style="text-align: center;padding-top: 1rem;padding-bottom:0.5rem;">
        <div style="padding-left: 19rem;">
          <p class="font-bold text-black" style="font-size: medium;">Tienda y Depósito Carmencita</p>
          <p class="text-black">Del {{ formatDate(fechaInicio) }} al {{ formatDate(fechaFin) }}</p>
        </div><div>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-auto">
          Resumen
        </button></div>
      </div>
  
      <div class="bg-white shadow-md rounded-lg overflow-hidden flex-1 mt-2"> <!-- Cambio de h-screen a flex-1 -->
        <table class="w-full min-w-max leading-normal">
          <thead>
            <tr>
              <th
                v-for="column in columns"
                :key="column"
                class="px-3 py-2 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider text-black"
              >
                {{ column }}
              </th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(product, index) in products" :key="index">
              <td
                v-for="column in columns"
                :key="column"
                class="px-3 py-2 border-b border-gray-200 bg-white text-sm text-black"
              >
                {{ column === 'Margen de Beneficio' ? `$${product[column.toLowerCase()]}` : product[column.toLowerCase()] }}
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        columns: [
          "Producto",
          "Cantidad Vendida",
          "Ingreso Generado",
          "Margen de Beneficio",
          "Precio Unitario",
          "Promoción Aplicada"
        ],
        products: [
          {
            producto: "Producto A",
            "cantidad vendida": 100,
            "ingreso generado": "$1,000",
            "margen de beneficio": 200,
            "precio unitario": "$10",
            "promoción aplicada": "Descuento del 10%"
          },
          {
            producto: "Producto B",
            "cantidad vendida": 200,
            "ingreso generado": "$2,000",
            "margen de beneficio": 250,
            "precio unitario": "$8",
            "promoción aplicada": "Descuento del 15%"
          },
          {
            producto: "Producto C",
            "cantidad vendida": 150,
            "ingreso generado": "$1,500",
            "margen de beneficio": 180,
            "precio unitario": "$12",
            "promoción aplicada": "Descuento del 5%"
          },
          {
            producto: "Producto D",
            "cantidad vendida": 120,
            "ingreso generado": "$1,200",
            "margen de beneficio": 220,
            "precio unitario": "$10",
            "promoción aplicada": "Sin promoción"
          }
        ],
        fechaInicio: '', // Inicializamos la fecha de inicio
        fechaFin: '', // Inicializamos la fecha de fin
        fechaActual: '' // Inicializamos la fecha actual
      };
    },
    created() {
      document.body.style.backgroundColor = "white";
      // Establecemos la fecha actual al valor actual
      this.fechaActual = new Date().toISOString().substr(0, 10);
      // Establecemos la fecha de inicio al valor actual
      this.fechaInicio = new Date().toISOString().substr(0, 10);
      // Calculamos la fecha de fin (fecha de inicio + 14 días)
      this.calcularFechaFin();
    },
    methods: {
      calcularFechaFin() {
        const fechaInicioDate = new Date(this.fechaInicio);
        fechaInicioDate.setDate(fechaInicioDate.getDate() + 14);
        this.fechaFin = fechaInicioDate.toISOString().substr(0, 10);
      },
      formatDate(dateString) {
  const options = { year: 'numeric', month: 'long', day: 'numeric' };
  const nextDay = new Date(dateString);
  nextDay.setDate(nextDay.getDate() + 1); // Agrega un día
  return nextDay.toLocaleDateString(undefined, options);
}
    }
  };
  </script>
  
  <style scoped>
  /* Estilos adicionales, si es necesario */
  </style>
  