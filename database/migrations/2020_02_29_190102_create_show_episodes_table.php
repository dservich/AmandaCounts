<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('show_episodes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('show_id');
            $table->string('title');
            $table->integer('season')->default(1);
            $table->text('comments')->nullable();
            $table->integer('rating')->nullable();
            $table->timestamps();

            $table->foreign('show_id')->references('id')->on('shows')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('show_episodes');
    }
}
