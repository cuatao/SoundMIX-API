<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongSingersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('song_singer', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('song_id')->nullable()->unsigned();
            $table->unsignedBigInteger('singer_id')->nullable()->unsigned();

        });
        Schema::table('song_singer', function ($table) {
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
            $table->foreign('singer_id')->references('id')->on('singers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('song_singers');
    }
}
