<template>
    <div class="ventas_producto flex flex-col">
      <h1 class="text-3xl font-bold text-left text-blue-800">Reporte de ciclo de vida de producto</h1>
      
      <hr class="border-b border-gray-200 mt-2 mb-2 w-full">
      
      <div class="flex justify-between items-center px-4 text-black">
        <div>
          <p><strong>Código:</strong> repcvp</p>
          <label for="fecha-inicio"><strong>Periodo analizado: Desde</strong></label>
          <input id="fecha-inicio" type="date" v-model="fechaInicio" class="ml-2 border border-gray-300 rounded px-3 py-2">
          <label for="fecha-fin" style="padding-left:1rem;"><strong>Hasta</strong></label>
          <input id="fecha-fin" type="date" v-model="fechaFin" class="ml-2 border border-gray-300 rounded px-3 py-2">
        </div>
        <p class="text-black">Fecha: {{ fechaActual }}</p>
      </div>
      
      <div class="flex justify-between px-4 mt-2" style="text-align: center;padding-top: 1rem;padding-bottom:0.5rem;">
        <div style="padding-left: 19.6rem;">
          <p class="font-bold text-black" style="font-size: medium;">Tienda y Depósito Carmencita</p>
        </div>
        <div>
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-auto">
            Resumen
          </button>
        </div>
      </div>
      
      <div class="bg-white shadow-md rounded-lg overflow-hidden flex-1 mt-2 mx-auto overflow-y-auto max-h-full" style="overflow-y: auto; scrollbar-width: none;">
        <table class="table-auto min-w-max leading-normal" style="text-align: center;">
          <thead>
            <tr>
              <th class="px-3 py-2 border-b border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider text-black">
                Producto
              </th>
              <th class="px-3 py-2 border-b border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider text-black">
                Ventas acumuladas
              </th>
              <th class="px-3 py-2 border-b border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider text-black">
                Margen de beneficio (%)
              </th>
              <th class="px-3 py-2 border-b border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider text-black">
                Tasa de crecimiento en ventas (%)
              </th>
              <th class="px-3 py-2 border-b border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider text-black">
                Rentabilidad (%)
              </th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(producto, index) in productos" :key="index">
              <td class="px-3 py-2 border-b border-gray-200 bg-white text-center text-sm text-black">{{ producto.nombre }}</td>
              <td class="px-3 py-2 border-b border-gray-200 bg-white text-center text-sm text-black">{{ producto.ventasAcumuladas }}</td>
              <td class="px-3 py-2 border-b border-gray-200 bg-white text-center text-sm text-black">{{ producto.margenBeneficio }}</td>
              <td class="px-3 py-2 border-b border-gray-200 bg-white text-center text-sm text-black">{{ producto.tasaCrecimiento }}</td>
              <td class="px-3 py-2 border-b border-gray-200 bg-white text-center text-sm text-black">{{ producto.rentabilidad }}</td>
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
        productos: [
  {
    nombre: 'Leche descremada',
    ventasAcumuladas: 1500,
    margenBeneficio: 20,
    tasaCrecimiento: 5,
    rentabilidad: 18
  },
  {
    nombre: 'Pan integral',
    ventasAcumuladas: 1200,
    margenBeneficio: 25,
    tasaCrecimiento: 7,
    rentabilidad: 22
  },
  {
    nombre: 'Jugo de naranja',
    ventasAcumuladas: 800,
    margenBeneficio: 15,
    tasaCrecimiento: 3,
    rentabilidad: 12
  },
  {
    nombre: 'Detergente en polvo',
    ventasAcumuladas: 950,
    margenBeneficio: 30,
    tasaCrecimiento: 10,
    rentabilidad: 25
  },
  {
    nombre: 'Cereal de avena',
    ventasAcumuladas: 600,
    margenBeneficio: 18,
    tasaCrecimiento: 4,
    rentabilidad: 15
  },
  {
    nombre: 'Huevos',
    ventasAcumuladas: 2000,
    margenBeneficio: 10,
    tasaCrecimiento: 6,
    rentabilidad: 9
  },
  {
    nombre: 'Manzanas',
    ventasAcumuladas: 1100,
    margenBeneficio: 22,
    tasaCrecimiento: 5,
    rentabilidad: 20
  },
  {
    nombre: 'Pasta integral',
    ventasAcumuladas: 700,
    margenBeneficio: 19,
    tasaCrecimiento: 4,
    rentabilidad: 17
  },
  {
    nombre: 'Arroz',
    ventasAcumuladas: 1600,
    margenBeneficio: 12,
    tasaCrecimiento: 7,
    rentabilidad: 10
  },
  {
    nombre: 'Aceite de oliva',
    ventasAcumuladas: 950,
    margenBeneficio: 35,
    tasaCrecimiento: 6,
    rentabilidad: 33
  },
  {
    nombre: 'Pollo',
    ventasAcumuladas: 1800,
    margenBeneficio: 25,
    tasaCrecimiento: 8,
    rentabilidad: 23
  },
  {
    nombre: 'Yogur natural',
    ventasAcumuladas: 1400,
    margenBeneficio: 18,
    tasaCrecimiento: 5,
    rentabilidad: 16
  },
  {
    nombre: 'Queso fresco',
    ventasAcumuladas: 1300,
    margenBeneficio: 20,
    tasaCrecimiento: 6,
    rentabilidad: 18
  },
  {
    nombre: 'Zanahorias',
    ventasAcumuladas: 900,
    margenBeneficio: 22,
    tasaCrecimiento: 4,
    rentabilidad: 20
  },
  {
    nombre: 'Tomates',
    ventasAcumuladas: 800,
    margenBeneficio: 20,
    tasaCrecimiento: 5,
    rentabilidad: 18
  }
]
,
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
        return new Date(dateString).toLocaleDateString(undefined, options);
      }
    }
  };
  </script>
  
  <style scoped>
  /* Estilos adicionales, si es necesario */
  </style>
  