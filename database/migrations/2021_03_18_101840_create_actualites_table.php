<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActualitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actualites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("publication_id");
            $table->unsignedBigInteger("categorie_actualite_id");
            $table->timestamps();
        });

        Schema::table("actualites", function (Blueprint $table){
            $table->foreign("publication_id")->references("id")->on("publications")->cascadeOnDelete();
            $table->foreign("categorie_actualite_id")->references("id")->on("categorie_actualites")->cascadeOnDelete();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actualites');
    }
}
