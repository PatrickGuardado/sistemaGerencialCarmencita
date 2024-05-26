<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dim_detalle_ventas', function (Blueprint $table) {
            $table->id("id_detalle_venta");
            //$table->timestamps();
            $table->string('codigo_barra_producto',20);
            $table->decimal('sub_total_detalle_venta',8,2);
            $table->integer('cantidad_producto');
            $table->dateTime('fecha_venta');
            $table->float('descuento',5,2);
            $table->decimal('costo',5,2);
            $table->foreignId('id')->constrained(
                table:'dim_productos', indexName:'id_dimen_productos'
            )
            ->onUpdate('cascade')
            ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dim_detalle_ventas');
    }
};
