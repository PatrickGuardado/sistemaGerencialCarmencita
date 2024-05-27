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
        Schema::create('analisis_vertical_rotacion_recurso_humano_facts', function (Blueprint $table) {
            $table->id('id_ref');
            //$table->timestamps();
            $table->decimal('analisis_tasa_rotacion_empleado',6,4);
            $table->decimal('analisis_ausentismo_laboral',6,4);
            /*$table->foreignId('id')->constrained(
                table:'dim_recurso_humano_rotacion_personals', indexName:'id'
            );
            $table->foreignId('id_ausentismo')->constrained(
                table:'dim_ausentismo_recurso_humanos', indexName:'id_ausentismo'
            );*/
            $table->bigInteger('id')->unsigned();
            $table->foreign('id','fk_id_analisis')->references('id')->on('dim_recurso_humano_rotacion_personals');

            $table->bigInteger('id_ausentismo')->unsigned();
            $table->foreign('id_ausentismo','fk_id_ausentismo')->references('id_ausentismo')->on('dim_ausentismo_recurso_humanos');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analisis_vertical_rotacion_recurso_humano_facts');
    }
};
