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
        Schema::create('analisis_vertical_salario_cargos', function (Blueprint $table) {
            $table->id('id_analisis_vertical');
            #$table->timestamps();
            $table->dateTime('fecha_analisis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analisis_vertical_salario_cargos');
    }
};
