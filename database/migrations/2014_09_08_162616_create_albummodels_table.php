<?php

use App\Models\Topmodel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbummodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albummodels', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('topmodel_id');
            $table->bigInteger('topmodel_id')->unsigned();
            $table->foreign('topmodel_id')->references('id')->on('topmodels')->onDelete('cascade');
            $table->string('photo')->unique();
            $table->string('video')->nullable();
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
        Schema::dropIfExists('albummodels');
    }
}
