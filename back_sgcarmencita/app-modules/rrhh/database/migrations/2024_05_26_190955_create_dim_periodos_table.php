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
        Schema::create('dim_periodos', function (Blueprint $table) {
            $table->id('id_periodo');
            //$table->timestamps();
            $table->dateTime('fecha_inicio_periodo');
            $table->dateTime('fecha_fin_periodo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dim_periodos');
    }
};
