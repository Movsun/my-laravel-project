<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quality_stars');
            $table->integer('effectiveness_stars');
            $table->integer('ease_of_use_stars');
            $table->text('quality_strenght');
            $table->text('quality_concern');
            $table->text('effectiveness_strenght');
            $table->text('effectiveness_concern');
            $table->text('ease_of_use_strenght');
            $table->text('ease_of_use_concern');
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('completion_status')->default(false);
            $table->integer('user_id');
            $table->integer('material_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('material_id')->references('id')->on('materials')->onDelete('cascade');
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
        Schema::drop('material_reviews');
    }
}
