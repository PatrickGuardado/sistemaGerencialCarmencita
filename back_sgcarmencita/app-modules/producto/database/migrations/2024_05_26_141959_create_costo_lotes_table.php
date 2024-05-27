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
        Schema::create('costo_lotes', function (Blueprint $table) {
            $table->integer('id_ref');
            #$table->timestamps();
            $table->dateTime('fecha_ingreso');
            $table->dateTime('fecha_vencimiento');
            $table->integer('cantidad');
            $table->decimal('precio_unitario',8,2);
            $table->decimal('costo_total',8,2);
            $table->bigInteger('id_producto')->unsigned();

            $table->foreignId('id_periodo')
            ->constrained(
                table:'dim_periodos' , indexName:'id'
            )
            ->onUpdate('cascade')
            ->onDelete('restrict');

           /* $table->foreignId('id_producto')
            ->constrained(
                table:'dim_productos' , indexName:'id_producto'
            )
            ->onUpdate('cascade')
            ->onDelete('restrict');*/
            $table->foreign('id_producto')->references('id_producto')->on('dim_productos')
            ->onUpdate("cascade")
            ->onDelete("restrict");

            $table->primary(['id_ref','id_periodo','id_producto']);


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('costo_lotes');
    }
};
