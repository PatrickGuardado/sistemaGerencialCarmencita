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
        Schema::create('dim_recurso_humano_rotacion_personals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->decimal('tasa_rotacion_empleado',6,4);
            $table->integer('empleados_inicio_periodo');
            $table->integer('empledos_fin_periodo');
            $table->integer('numero_empleados_contratados');
            $table->integer('numero_empleados_despedidos');
            $table->bigInteger('id_periodo')->unsigned();
            $table->foreign('id_periodo')->references('id_periodo')->on('dim_periodos')
            ->onUpdate('cascade')
            ->onDelete('restrict');
            /*$table->foreignId('id_periodo')->constrained(
                table:'dim_periodos', indexName:'id_periodo'
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
        Schema::dropIfExists('dim_recurso_humano_rotacion_personals');
    }
};
