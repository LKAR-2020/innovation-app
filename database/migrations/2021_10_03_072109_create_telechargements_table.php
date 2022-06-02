<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelechargementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telechargements', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('magazine_id')->unsigned();
            $table->foreign('magazine_id')->references('id')->on('magazines')->onDelete('cascade');
            $table->boolean('number')->default(1);
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
        Schema::dropIfExists('telechargements');
    }
}
