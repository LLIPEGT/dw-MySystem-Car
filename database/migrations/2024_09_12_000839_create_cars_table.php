<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('plate');
            $table->unsignedBigInteger('mold_id');
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('color_id');
            $table->foreign('mold_id')->references('id')->on('molds');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('color_id')->references('id')->on('colors');
            $table->softDeletes();
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
        Schema::dropIfExists('cars');
    }
}
