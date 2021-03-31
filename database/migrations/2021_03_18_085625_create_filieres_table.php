<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filieres', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->text("description");
            $table->string("image");
            $table->unsignedBigInteger("cycle_id");
            $table->timestamps();
        });

        Schema::table("filieres", function (Blueprint $table) {
            $table->foreign("cycle_id")->references("id")->on("cycle")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filieres');
    }
}
