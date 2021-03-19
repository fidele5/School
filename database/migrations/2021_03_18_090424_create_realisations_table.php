<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realisations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("publication_id");
            $table->unsignedBigInteger("categorie_realisation_id");
            $table->timestamps();
        });

        Schema::table('realisations', function (Blueprint $table){
            $table->foreign("publication_id")->references("id")->on("publications")->cascadeOnDelete();
            $table->foreign("categorie_realisation_id")->references("id")->on("categorie_realisations")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realisations');
    }
}
