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
        Schema::create('salario_cargo_analisis_verticals', function (Blueprint $table) {
            $table->id();
            #$table->timestamps();
            $table->bigInteger('id_analisis_vertical')->unsigned();
            $table->bigInteger('id_salario_cargo')->unsigned();
            $table->foreign('id_analisis_vertical')->references('id_analisis_vertical')->on('analisis_vertical_salario_cargos');
            $table->foreign('id_salario_cargo')->references('id_salario_cargo')->on('salario_cargos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salario_cargo_analisis_verticals');
    }
};
