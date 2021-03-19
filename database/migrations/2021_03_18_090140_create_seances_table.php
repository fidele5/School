<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("cours_id");
            $table->unsignedBigInteger("horaire_id");
            $table->string("description");
            $table->dateTime("heure_debut");
            $table->dateTime("heure_fin");
            $table->timestamps();
        });

        Schema::table("seances", function(Blueprint $table){
            $table->foreign("cours_id")->references("id")->on("cours")->cascadeOnDelete();
            $table->foreign("horaire_id")->references("id")->on("horaires")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seances');
    }
}
