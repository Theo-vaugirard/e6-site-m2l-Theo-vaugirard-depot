<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interventions', function (Blueprint $table) {
            $table->increments('id_intervention');
            $table->integer('num_salle')->default(14);;
            $table->unsignedInteger('num_intervenant')->default(1);
            $table->dateTime('date_heure')->nullable();
            $table->text('motif')->nullable();
            $table->timestamps();

            $table->foreign('num_salle')->references('numero_salle')->on('salles');
            $table->foreign('num_intervenant')->references('numero_intervenant')->on('intervenants');

            $table->charset = 'utf8mb4';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interventions');
    }
};
