<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageRealisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_realisations', function (Blueprint $table) {
            $table->id();
            $table->string("uri");
            $table->unsignedBigInteger("realisation_id");
            $table->timestamps();
        });

        Schema::table('image_realisations', function (Blueprint $table){
            $table->foreign("realisation_id")->references("id")->on("realisations")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_realisations');
    }
}
