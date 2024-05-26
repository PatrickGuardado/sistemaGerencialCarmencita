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
        Schema::create('dim_productos', function (Blueprint $table) {
            $table->id();
            //$table->timestamps();
            $table->integer("id_producto");
            $table->string("nombre_producto");
            $table->decimal("precio_unitario",5,2);
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
