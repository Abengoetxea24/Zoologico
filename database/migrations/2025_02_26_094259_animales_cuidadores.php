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
        //

        Schema::create('animales_cuidadores', function (Blueprint $table) {
            $table->unsignedBigInteger('animales_id');
            $table->unsignedBigInteger('cuidadores_id');
            $table->foreign('animales_id')->references('id')->on('animals')->onDelete('cascade');
            $table->foreign('cuidadores_id')->references('id')->on('cuidadors')->onDelete('cascade');
          
        });



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
