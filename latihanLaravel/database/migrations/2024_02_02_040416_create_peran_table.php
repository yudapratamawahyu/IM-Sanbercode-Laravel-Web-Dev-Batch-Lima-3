<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peran', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->unsignedBigInteger('film_id');
            $table->foreign('film_id')->references('id')->on('film');

            $table->unsignedBigInteger('castt_id');
            $table->foreign('castt_id')->references('id')->on('castt');

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
        Schema::dropIfExists('peran');
    }
};
