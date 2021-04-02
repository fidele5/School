<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('etudiant_id')->foreignKey('etudiant_id')->references('id')->on('etudiants');
            $table->unsignedBigInteger('cours_id')->foreignKey('cours_id')->references('id')->on('cours');
            $table->float('moyenne')->default(0);
            $table->float('examen')->default(0);
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
        Schema::dropIfExists('resultats');
    }
}
