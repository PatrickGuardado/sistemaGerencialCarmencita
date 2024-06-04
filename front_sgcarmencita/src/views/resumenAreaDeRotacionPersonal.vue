<template>
  <div class="ventas_producto flex flex-col" style="width: 125ch">
    <h1 class="text-3xl font-bold text-left text-blue-800">
      Resumen de reporte de área de rotación de personal mensual
    </h1>

    <hr class="border-b border-gray-200 mt-2 mb-2 w-full" />

    <div class="flex justify-between items-center px-4 text-black">
      <div>
        <p><strong>Código:</strong> RS115062024</p>
        <label for="fecha-inicio"><strong>Analizado en la fecha:</strong></label>
        <input id="fecha-inicio" type="date" v-model="fechaInicio"
          class="ml-2 border border-gray-300 rounded px-3 py-2" />
      </div>
    </div>
    <hr class="border-b border-gray-200 mt-2 mb-2 w-full" />

    <h1 class="text-1xl font-bold text-left text-black" style="align-items: center; text-align: center">
      Tienda y Depósito Carmencita
    </h1>

    <hr class="border-b border-gray-200 mt-2 mb-2 w-full" />
    <h1 class="text-1xl font-bold text-left text-black" style="align-items: center; text-align: center">
      Resumen ejecutivo
    </h1>
    <textarea id="message" rows="4"
      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
      disabled>
Total de empleados al inicio del mes: 23                                                                                                                                                                                                               Nuevas contrataciones: 6
Salidas de empleados: 3                                                                                                                                                                                                               
Tasa de rotación: 4%
    </textarea>
    <hr class="border-b border-gray-200 mt-2 mb-2 w-full" />
    <h1 class="text-1xl font-bold text-left text-black" style="align-items: center; text-align: center">
      Analisis de tendencias
    </h1>
    <textarea id="message" rows="2"
      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
      disabled>
Incremento / Disminucion de la rotación                                                                                                                                                                                                               
    </textarea>
    <hr class="border-b border-gray-200 mt-2 mb-2 w-full" />
    <h1 class="text-1xl font-bold text-left text-black" style="align-items: center; text-align: center">
      Recomendaciones
    </h1>
    <textarea id="message" rows="3"
      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
      disabled>
Mejoras en el proceso de seleccion                                                                                                                                                                                                              Analisis del clima laboral
Progamas para la atencion de los empleados
    </textarea>
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
