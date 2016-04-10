<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAudiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audiences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('audience_material', function (Blueprint $table) {
            $table->integer('material_id');
            $table->foreign('material_id')->references('id')->on('materials')->onDelete('cascade');
            $table->integer('audience_id');
            $table->foreign('audience_id')->references('id')->on('audiences')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('audiences');
        Schema::drop('audience_material');
    }
}
