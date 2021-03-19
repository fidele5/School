<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("promotion_id");
            $table->unsignedBigInteger("user_id");
            $table->string("matricule")->nullable();
            $table->string("lieu_naissance");
            $table->date("date_naissance");
            $table->string("ecole_provenance");
            $table->double("pourcentage");
            $table->string("option_laureat");
            $table->string("annee_laureat");
            $table->timestamps();
        });

        Schema::table('etudiants', function(Blueprint $table){
            $table->foreign("promotion_id")->references("id")->on("promotions")->cascadeOnDelete();
            $table->foreign("user_id")->references("id")->on("users")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
