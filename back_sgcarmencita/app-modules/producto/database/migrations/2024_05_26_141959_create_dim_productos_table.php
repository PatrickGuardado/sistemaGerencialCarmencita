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
        Schema::create('dim_productos', function (Blueprint $table) {
            $table->id("id_producto");
            //$table->timestamps();
            $table->string('codigo_barra_producto',15);
            $table->string('nombre_producto',50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dim_productos');
    }
};
