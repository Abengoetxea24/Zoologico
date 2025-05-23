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
        Schema::create('habitats', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("temperatura"); 
            $table->string("imagen");
            $table->string("humedad");
            $table->string("vegetacion");
            $table->string("iluminacion");
            $table->string("descripcion");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habitats');
    }
};
