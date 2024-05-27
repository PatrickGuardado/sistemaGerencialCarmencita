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
        Schema::create('salario_cargos', function (Blueprint $table) {
            $table->id('id_salario_cargo');
            #$table->timestamps();
            $table->string('nombre_cargo',25);
            $table->decimal('salario_cargo',8,2);
            $table->string('descripcion_cargo',30);
            $table->timestamp('hora_entrada')->nullable();
            $table->timestamp('hora_salida')->nullable();
            $table->integer('horas_de_trabajo');
            $table->bigInteger('id_cargo')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salario_cargos');
    }
};
