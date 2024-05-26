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
        Schema::create('fac_ventas', function (Blueprint $table) {
            
            //$table->timestamps();
            $table->integer("id_ref");
            $table->foreignId('id_dimen_productos')->constrained(
                table:'dim_productos', indexName:'id'
            )
            ->onUpdate('cascade')
            ->onDelete('restrict');
            $table->foreignId('id_detalle_venta')->constrained(
                table:'dim_detalle_ventas' , indexName:'id_detalle_venta'
            )
            ->onUpdate('cascade')
            ->onDelete('restrict');
            $table->decimal('ingresos',8,2);
            $table->decimal('margen_beneficio',8,2);
            $table->decimal('costos',8,2);
            $table->dateTime('fecha');
            $table->primary(['id_ref','id_dimen_productos','id_detalle_venta']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fac_ventas');
    }
};
