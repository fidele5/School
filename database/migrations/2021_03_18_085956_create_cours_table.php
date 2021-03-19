<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cours', function (Blueprint $table) {
            $table->id();
            $table->string("intitule");
            $table->string("description");
            $table->integer("ponderation");
            $table->unsignedBigInteger("promotion_id");
            $table->unsignedBigInteger("enseignant_id");
            $table->timestamps();
        });

        Schema::table("cours", function(Blueprint $table){
            $table->foreign("promotion_id")->references("id")->on("promotions")->cascadeOnDelete();
            $table->foreign("enseignant_id")->references("id")->on("enseignants")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cours');
    }
}
