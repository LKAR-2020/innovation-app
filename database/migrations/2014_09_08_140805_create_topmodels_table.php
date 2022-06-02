<?php

use App\Models\category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topmodels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->integer('contact');
            $table->date('date');
            $table->string('sexe', 6)->default('Homme');
            $table->string('style',10)->default('jeunes');
            $table->integer('taille');
            // $table->bigInteger('albummodel_id')->unsigned();
            // $table->foreign('albummodel_id')->references('id')->on('albummodels')->onDelete('cascade');
            $table->string('facebook');
            $table->string('commune');
            $table->string('classe');
            $table->string('nationnalite')->default('ivoirienne');
            $table->string('teint')->default('noirs');
            $table->integer('poids');
            $table->string('video');
            $table->string('image');
            // $table->bigInteger('type_id')->unsigned();
            // $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
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
        Schema::dropIfExists('topmodels');
    }
}
