<template>
    <div class="ventas_producto flex flex-col">
        <h1 class="text-3xl font-bold text-left text-blue-800" style="width: 50ch;">
            Resumen de reporte de ventas por producto</h1>

        <hr class="border-b border-gray-200 mt-2 mb-2 w-full">

        <div class="flex justify-between items-center px-4 text-black">
            <div>
                <p><strong>Código:</strong> RVPP1554656</p>
                <label for="fecha-inicio"><strong>Periodo analizado: Desde</strong></label>
                <input id="fecha-inicio" type="date" v-model="fechaInicio"
                    class="ml-2 border border-gray-300 rounded px-3 py-2">
                <label for="fecha-fin" style="padding-left:1rem;"><strong>Hasta</strong></label>
                <input id="fecha-fin" type="date" v-model="fechaFin"
                    class="ml-2 border border-gray-300 rounded px-3 py-2">
            </div>
        </div>
        <hr class="border-b border-gray-200 mt-2 mb-2 w-full">
        <div class="flex justify-between px-4 mt-2" style="text-align: center;padding-top: 1rem;padding-bottom:0.5rem;">
            <div style="padding-left: 16rem;">
                <p class="font-bold text-black" style="font-size: medium;">Tienda y Depósito Carmencita</p>
                <p class="text-black">Del {{ formatDate(fechaInicio) }} al {{ formatDate(fechaFin) }}</p>
            </div>
        </div>

        <div class="bg-white shadow-md rounded-lg overflow-hidden flex-1 mt-2"> <!-- Cambio de h-screen a flex-1 -->
            <h1 class="text-1xl font-bold text-left text-black" style="align-items: center; text-align: center">
      Resumen ejecutivo
    </h1>
    <textarea id="message" rows="4"
      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
      disabled>El presente informe analiza las ventas de productos de la Tienda y Depósito Carmencita durante el periodo del 2 de junio de 2024 al 16 de junio de 2024. Se evaluaron 13 productos distintos, destacando tanto las cantidades vendidas como los ingresos generados, los márgenes de beneficio, los precios unitarios y las promociones aplicadas. Este análisis proporciona una visión integral de los productos más vendidos, su rentabilidad y recomendaciones estratégicas para mejorar las ventas y la rentabilidad futura.
    </textarea>
    <hr class="border-b border-gray-200 mt-2 mb-2 w-full" />
    <h1 class="text-1xl font-bold text-left text-black" style="align-items: center; text-align: center">
      Analisis de tendencias
    </h1>
    <textarea id="message" rows="2"
      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
      disabled>Productos Más Vendidos por Cantidad
Huevos: 2000 unidades
Leche descremada: 1500 unidades
Arroz: 1800 unidades
Productos Más Vendidos por Ingresos
Pollo: $27,000
Queso fresco: $13,000
Leche descremada: $12,000
Productos Más Rentables (Mayor Margen de Beneficio)
Pollo: $25
Pan integral: $25
Leche descremada: $20
Productos Menos Rentables (Menor Margen de Beneficio)
Huevos: $5
Pasta integral: $5
Yogur natural: $5
Impacto de las Promociones
Descuento del 10%: Aplicado a la Leche descremada, Huevos y Yogur natural. Resultó en altas ventas de Huevos y Leche descremada.
Descuento del 5%: Aplicado a Pan integral, Cereal de avena y Pasta integral. Ayudó a mantener ventas consistentes.
Descuento del 15%: Aplicado al Aceite de oliva. Aumentó las ventas de un producto de alto valor.
                                                                                                                                                                                                              
    </textarea>
    <hr class="border-b border-gray-200 mt-2 mb-2 w-full" />
    <h1 class="text-1xl font-bold text-left text-black" style="align-items: center; text-align: center">
      Recomendaciones
    </h1>
    <textarea id="message" rows="3"
      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
      disabled>Aumentar Promociones en Productos Rentables
Pollo: Con un alto margen de beneficio y altos ingresos, se recomienda mantener y aumentar las promociones para atraer más compradores.
Pan integral: Continuar con las promociones, ya que muestra una buena relación de venta y margen de beneficio.
Revaluar Promociones en Productos con Bajo Margen
Huevos y Pasta integral: Considerar reducir las promociones o ajustar precios para mejorar la rentabilidad sin afectar significativamente las ventas.
Estrategias de Promoción Cruzada
Queso fresco y Pan integral: Implementar promociones combinadas para incrementar las ventas de ambos productos.
Leche descremada y Cereal de avena: Ofrecer descuentos conjuntos para incentivar la compra de ambos productos, aprovechando la complementariedad.
Incentivar Ventas de Productos de Alto Volumen
Arroz y Manzanas: Desarrollar campañas de promoción para aumentar aún más sus ventas, aprovechando su alta demanda.
Monitorear el Impacto de Promociones
Implementar un seguimiento detallado de las promociones para ajustar las estrategias en tiempo real, asegurando que contribuyan positivamente a los ingresos y la rentabilidad.
    </textarea>
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
                    producto: "Leche descremada",
                    "cantidad vendida": 1500,
                    "ingreso generado": "$12,000",
                    "margen de beneficio": 20,
                    "precio unitario": "$8",
                    "promoción aplicada": "Descuento del 10%"
                },
                {
                    producto: "Pan integral",
                    "cantidad vendida": 1200,
                    "ingreso generado": "$9,600",
                    "margen de beneficio": 25,
                    "precio unitario": "$8",
                    "promoción aplicada": "Descuento del 5%"
                },
                {
                    producto: "Jugo de naranja",
                    "cantidad vendida": 800,
                    "ingreso generado": "$4,800",
                    "margen de beneficio": 15,
                    "precio unitario": "$6",
                    "promoción aplicada": "Sin promoción"
                },
                {
                    producto: "Detergente en polvo",
                    "cantidad vendida": 950,
                    "ingreso generado": "$11,400",
                    "margen de beneficio": 30,
                    "precio unitario": "$12",
                    "promoción aplicada": "Descuento del 10%"
                },
                {
                    producto: "Cereal de avena",
                    "cantidad vendida": 600,
                    "ingreso generado": "$4,800",
                    "margen de beneficio": 18,
                    "precio unitario": "$8",
                    "promoción aplicada": "Descuento del 5%"
                },
                {
                    producto: "Huevos",
                    "cantidad vendida": 2000,
                    "ingreso generado": "$10,000",
                    "margen de beneficio": 10,
                    "precio unitario": "$5",
                    "promoción aplicada": "Descuento del 10%"
                },
                {
                    producto: "Manzanas",
                    "cantidad vendida": 1100,
                    "ingreso generado": "$7,700",
                    "margen de beneficio": 22,
                    "precio unitario": "$7",
                    "promoción aplicada": "Sin promoción"
                },
                {
                    producto: "Pasta integral",
                    "cantidad vendida": 700,
                    "ingreso generado": "$4,900",
                    "margen de beneficio": 19,
                    "precio unitario": "$7",
                    "promoción aplicada": "Descuento del 5%"
                },
                {
                    producto: "Arroz",
                    "cantidad vendida": 1600,
                    "ingreso generado": "$8,000",
                    "margen de beneficio": 12,
                    "precio unitario": "$5",
                    "promoción aplicada": "Sin promoción"
                },
                {
                    producto: "Aceite de oliva",
                    "cantidad vendida": 950,
                    "ingreso generado": "$19,000",
                    "margen de beneficio": 35,
                    "precio unitario": "$20",
                    "promoción aplicada": "Descuento del 15%"
                },
                {
                    producto: "Pollo",
                    "cantidad vendida": 1800,
                    "ingreso generado": "$27,000",
                    "margen de beneficio": 25,
                    "precio unitario": "$15",
                    "promoción aplicada": "Sin promoción"
                },
                {
                    producto: "Yogur natural",
                    "cantidad vendida": 1400,
                    "ingreso generado": "$9,800",
                    "margen de beneficio": 18,
                    "precio unitario": "$7",
                    "promoción aplicada": "Descuento del 10%"
                },
                {
                    producto: "Queso fresco",
                    "cantidad vendida": 1300,
                    "ingreso generado": "$13,000",
                    "margen de beneficio": 20,
                    "precio unitario": "$10",
                    "promoción aplicada": "Descuento del 5%"
                },
                {
                    producto: "Zanahorias",
                    "cantidad vendida": 900,
                    "ingreso generado": "$4,500",
                    "margen de beneficio": 22,
                    "precio unitario": "$5",
                    "promoción aplicada": "Sin promoción"
                },
                {
                    producto: "Tomates",
                    "cantidad vendida": 800,
                    "ingreso generado": "$4,000",
                    "margen de beneficio": 20,
                    "precio unitario": "$5",
                    "promoción aplicada": "Descuento del 5%"
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