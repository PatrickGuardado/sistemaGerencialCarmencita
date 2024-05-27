<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    protected $connection = 'mysql';
    public function up(): void
    {
        Schema::create('inventario_ciclo_vida_product_facts', function (Blueprint $table) {
            $table->id();
            #$table->timestamps()
            $table->decimal('ingresos_generados',8,2);
            $table->decimal('margen_beneficio',8,2);
            $table->decimal('tasa_crecimiento',8,2);
            $table->decimal('ingresos_periodo_pasado',8,2);
            $table->integer('cantidad_vendida');
            $table->decimal('costo_vendida',8,2);
            $table->unsignedBigInteger('id_periodo');
            $table->foreign('id_periodo')->references('id')->on('dim_periodos')->onUpdate('cascade')->onDelete('restrict');

            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto')->references('id_producto')->on('dim_productos')->onUpdate('cascade')->onDelete('restrict');


           /* $table->foreignId('id_periodo')->constrained(
                table:'dim_periodos', indexName:'id_periodo'
            )
            ->onUpdate('cascade')
            ->onDelete('restrict');

            $table->foreignId('id_producto')
            ->constrained(
                table:'dim_productos', indexName:'id_producto'
            )
            ->onUpdate('cascade')
            ->onDelete('restrict');*/
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventario_ciclo_vida_product_facts');
    }
};
