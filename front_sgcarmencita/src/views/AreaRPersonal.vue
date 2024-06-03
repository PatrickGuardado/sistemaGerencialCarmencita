<template>
  <div class="ventas_producto flex flex-col">
    <h1 class="text-3xl font-bold text-left text-blue-800" style="padding-top: 1rem;">Reporte de área de rotación de personal mensual</h1>

    <hr class="border-b border-gray-200 mt-2 mb-2 w-full">

    <div class="flex justify-between items-center px-4 text-black">
      <div>
        <p><strong>Código:</strong> reprpm</p>
      </div>
      <p class="text-black">Fecha: {{ fechaActual }}</p>
    </div>

    <div class="flex justify-center px-4 mt-2" style="text-align: center;padding-top: 1rem;padding-bottom:0.5rem;">
      <p class="font-bold text-black" style="font-size: medium;">Tienda y Depósito Carmencita</p>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden flex-1 mt-2">
      <table class="w-full min-w-max leading-normal" style="text-align: center;">
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
              v-for="(value, key) in product"
              :key="key"
              class="px-3 py-2 border-b border-gray-200 bg-white text-sm text-black"
            >
              {{ value }}
            </td>
            <td class="px-3 py-2 border-b border-gray-200 bg-white text-sm text-black">
              <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Resumen
              </button>
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
        "Mes",
        "Total empleados IICIO",
        "Nuevas contrataciones",
        "Salidas",
        "Tasa de rotación"
      ],
      products: [
        {
          Mes: "Enero",
          "Total empleados IICIO": 20,
          "Nuevas contrataciones": 2,
          Salidas: 1,
          "Tasa de rotación": "7%"
        },
        {
          Mes: "Febrero",
          "Total empleados IICIO": 21,
          "Nuevas contrataciones": 3,
          Salidas: 5,
          "Tasa de rotación": "10%"
        },
        {
          Mes: "Marzo",
          "Total empleados IICIO": 19,
          "Nuevas contrataciones": 3,
          Salidas: 0,
          "Tasa de rotación": "5.67%"
        },
        {
          Mes: "Abril",
          "Total empleados IICIO": 21,
          "Nuevas contrataciones": 1,
          Salidas: 0,
          "Tasa de rotación": "5.90%"
        },
        {
          Mes: "Mayo",
          "Total empleados IICIO": 22,
          "Nuevas contrataciones": 3,
          Salidas: 1,
          "Tasa de rotación": "4.23%"
        },
        {
          Mes: "Junio",
          "Total empleados IICIO":24,
          "Nuevas contrataciones": 0,
          Salidas: 1,
          "Tasa de rotación": "3%"
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