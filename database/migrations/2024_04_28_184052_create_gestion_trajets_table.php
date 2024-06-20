<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGestionTrajetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestion_trajets', function (Blueprint $table) {
            $table->id();
            $table->string('départ');
            $table->string('arrivée');
            $table->string('prix');
            $table->string('date');
            $table->string('heures');
            $table->string('chauffeur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gestion_trajets');
    }
}
