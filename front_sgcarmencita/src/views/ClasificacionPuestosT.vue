<template>
    <div class="ventas_producto flex flex-col">
      <h1 class="text-3xl font-bold text-left text-blue-800">Reporte de clasificación de puestos trimestral</h1>
  
      <hr class="border-b border-gray-200 mt-2 mb-2 w-full">
  
      <div class="flex justify-between items-center px-4 text-black">
        <div>
          <p><strong>Código:</strong> repcpt</p>
          <label for="fecha-inicio"><strong>Periodo analizado: Desde</strong></label>
          <input id="fecha-inicio" type="date" v-model="fechaInicio" class="ml-2 border border-gray-300 rounded px-3 py-2">
          <label for="fecha-fin" style="padding-left:1rem;"><strong>Hasta</strong></label>
          <input id="fecha-fin" type="date" v-model="fechaFin" class="ml-2 border border-gray-300 rounded px-3 py-2">
        </div>
        <p class="text-black">Fecha: {{ fechaActual }}</p>
      </div>
  
      <div class="flex justify-between px-4 mt-2" style="text-align: center;padding-top: 1rem;padding-bottom:0.5rem;">
        <div style="padding-left: 22rem;">
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
              <th class="px-3 py-4 border-b border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider text-black">
                Puesto
              </th>
              <th class="px-3 py-4 border-b border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider text-black">
                Descripción
              </th>
              <th class="px-3 py-4 border-b border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider text-black">
                Nivel de clasificación
              </th>
              <th class="px-3 py-4 border-b border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider text-black">
                Salario promedio
              </th>
              <th class="px-3 py-4 border-b border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider text-black">
                Consistencia
              </th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(puesto, index) in puestos" :key="index">
              <td class="px-3 py-4 border-b border-gray-200 bg-white text-center text-sm text-black">{{ puesto.puesto }}</td>
              <td class="px-3 py-4 border-b border-gray-200 bg-white text-left text-sm text-black max-w-xs">{{ puesto.descripcion }}</td>
              <td class="px-3 py-4 border-b border-gray-200 bg-white text-center text-sm text-black">{{ puesto.nivel_clasificacion }}</td>
              <td class="px-3 py-4 border-b border-gray-200 bg-white text-center text-sm text-black">{{ puesto.salario_promedio }}</td>
              <td class="px-3 py-4 border-b border-gray-200 bg-white text-center text-sm text-black">{{ puesto.consistencia }}</td>
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
        puestos: [
  {
    puesto: "Gerente",
    descripcion: "Responsable de supervisar todas las operaciones de la tienda.",
    nivel_clasificacion: "Nivel 1",
    salario_promedio: "$1500.00",
    consistencia: "Excelente"
  },
  {
    puesto: "Cajero",
    descripcion: "Encargado de manejar las transacciones en la caja registradora.",
    nivel_clasificacion: "Nivel 3",
    salario_promedio: "$370.00",
    consistencia: "Aceptable"
  },
  {
    puesto: "Despachador",
    descripcion: "Responsable de organizar y distribuir productos en el almacén.",
    nivel_clasificacion: "Nivel 3",
    salario_promedio: "$365.00",
    consistencia: "Excelente"
  },
  {
    puesto: "Repartidor",
    descripcion: "Encargado de la entrega de productos a los clientes.",
    nivel_clasificacion: "Nivel 3",
    salario_promedio: "$365.00",
    consistencia: "Aceptable"
  },
  {
    puesto: "Supervisor",
    descripcion: "Encargado de supervisar al personal y asegurar el cumplimiento de las normas.",
    nivel_clasificacion: "Nivel 2",
    salario_promedio: "$700.00",
    consistencia: "Excelente"
  }
],
        fechaInicio: '', // Inicializamos la fecha de inicio
        fechaFin: '', // Inicializamos la fecha de fin
        fechaActual: '' // Inicializamos la fecha actual
      };
    },
    created() {
  document.body.style.backgroundColor = "white";
  // Obtenemos la fecha actual en la zona horaria local del usuario
  let fechaActual = new Date();
  this.fechaActual = fechaActual.toLocaleDateString();
  // Restamos un día a la fecha actual
  fechaActual.setDate(fechaActual.getDate() - 1);
  // Establecemos la fecha de inicio al valor actual
  this.fechaInicio = fechaActual.toISOString().substr(0, 10);
  // Calculamos la fecha de fin (fecha de inicio + 14 días)
  this.calcularFechaFin();
},
    methods: {
      calcularFechaFin() {
        const fechaInicioDate = new Date(this.fechaInicio);
        fechaInicioDate.setDate(fechaInicioDate.getDate() + 14);
        this.fechaFin = fechaInicioDate.toISOString().substr(0, 10);
      }
    }
  };
  </script>
  
  <style scoped>
  /* Estilos adicionales, si es necesario */
  </style>
  