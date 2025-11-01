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
        Schema::create('climatiseurs', function (Blueprint $table) {
            $table->id();
            $table->string('modele');
            $table->string('marque');
            $table->integer('puissance');
            $table->integer('surface_min')->nullable();
            $table->integer('surface_max')->nullable();
            $table->integer('num_salle')->default(14);

            $table->foreign('num_salle')->references('numero_salle')->on('salles');

            $table->charset = 'utf8mb4';
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('climatiseurs');
    }
};
