<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    protected $connection = 'mysql_third';
    public function up(): void
    {
        Schema::create('dim_ausentismo_recurso_humanos', function (Blueprint $table) {
            $table->id('id_ausentismo');
            #$table->timestamps();
            $table->bigInteger('id_periodo')->unsigned();
            $table->integer('total_empleados_ausentes');
           # $table->foreignId('id_periodo')->contrained(
           /*     table:'dim_periodos', indexName:'id_periodo'
            )
            ->onUpdate('cascade')
            ->onDelete('restrict');*/
            $table->foreign('id_periodo')->references('id_periodo')->on('dim_periodos')
            ->onUpdate('cascade')
            ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dim_ausentismo_recurso_humanos');
    }
};
