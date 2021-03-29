<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horaires', function (Blueprint $table) {
            $table->id();
            $table->string("description");
            $table->date("debut");
            $table->date("fin");
            $table->unsignedBigInteger("promotion_id");
            $table->timestamps();
        });

        Schema::table("horaires", function(Blueprint $table){
            $table->foreign("promotion_id")->references("id")->on("promotions")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horaires');
    }
}
