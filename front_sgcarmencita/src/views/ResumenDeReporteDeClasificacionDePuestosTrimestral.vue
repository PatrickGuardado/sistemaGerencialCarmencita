<template>
  <div class="ventas_producto flex flex-col" style="width: 125ch">
    <h1 class="text-3xl font-bold text-left text-blue-800">
      Resumen de reporte de clasificación de puestos trimestral
    </h1>

    <hr class="border-b border-gray-200 mt-2 mb-2 w-full" />

    <div class="flex justify-between items-center px-4 text-black">
      <div>
        <p><strong>Código:</strong> RS115062024</p>
        <label for="fecha-inicio"><strong>Analizado en la fecha:</strong></label>
        <input
          id="fecha-inicio"
          type="date"
          v-model="fechaInicio"
          class="ml-2 border border-gray-300 rounded px-3 py-2"
        />
      </div>
    </div>
    <hr class="border-b border-gray-200 mt-2 mb-2 w-full" />

    <h1
      class="text-1xl font-bold text-left text-black"
      style="align-items: center; text-align: center"
    >
      Tienda y Depósito Carmencita
    </h1>

    <hr class="border-b border-gray-200 mt-2 mb-2 w-full" />
    <h1
      class="text-1xl font-bold text-left text-black"
      style="align-items: center; text-align: center"
    >
      Resumen ejecutivo
    </h1>
    <div class="mt-4 mx-auto max-w-full space-y-4">
      <div class="bg-white shadow-md rounded-lg overflow-hidden flex-1 max-h-full">
        <table class="table-auto min-w-max leading-normal w-full" style="text-align: center">
          <thead>
            <tr>
              <th
                class="px-8 py-2 border-b border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider text-black"
              >
                Puestos Disponibles
              </th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="analizado in analizados">
              <td
                class="px-8 py-2 border-b border-gray-200 bg-white text-center text-sm text-black"
              >
                {{ analizado }}
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="bg-white shadow-md rounded-lg overflow-hidden flex-1 max-h-full">
        <table class="table-auto min-w-max leading-normal w-full" style="text-align: center">
          <thead>
            <tr>
              <th
                class="px-3 py-2 border-b border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider text-black"
              >
                Tendencias indentificadas
              </th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="day in days">
              <td
                class="px-3 py-4 border-b border-gray-200 bg-white text-center text-sm text-black"
              >
                {{ day }}
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!--Otra tabla-->
</template>

<script>
export default {
  data() {
    return {
      analizados: ['19'],
      days: [
        'Las tendencias de los puestos de trabajo con alta rotación, estabilizan la dinamica del negocio que con rotación media y puestos de trabajo con baja rotación.'
      ]
    }
  },
  created() {
    document.body.style.backgroundColor = 'white'
    // Establecemos la fecha actual al valor actual
    this.fechaActual = new Date().toISOString().substr(0, 10)
    // Establecemos la fecha de inicio al valor actual
    this.fechaInicio = new Date().toISOString().substr(0, 10)
    // Calculamos la fecha de fin (fecha de inicio + 14 días)
    this.calcularFechaFin()
  },
  methods: {
    calcularFechaFin() {
      const fechaInicioDate = new Date(this.fechaInicio)
      fechaInicioDate.setDate(fechaInicioDate.getDate() + 14)
      this.fechaFin = fechaInicioDate.toISOString().substr(0, 10)
    },
    formatDate(dateString) {
      const options = { year: 'numeric', month: 'long', day: 'numeric' }
      return new Date(dateString).toLocaleDateString(undefined, options)
    }
  }
}
</script>

<style scoped>
/* Estilos adicionales, si es necesario */
</style>
