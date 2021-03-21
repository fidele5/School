<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvenementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("publication_id");
            $table->unsignedBigInteger("categorie_evenement_id");
            $table->dateTime("debut");
            $table->dateTime("fin");
            $table->timestamps();
        });

        Schema::table("evenements", function (Blueprint $table){
            $table->foreign("publication_id")->references("id")->on("publications")->cascadeOnDelete();
            $table->foreign("categorie_evenement_id")->references("id")->on("categorie_evenements")->cascadeOnDelete();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evenements');
    }
}
