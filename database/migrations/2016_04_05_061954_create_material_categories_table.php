<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique()->index();
            $table->timestamps();
        });
        Schema::create('material_material_category', function (Blueprint $table) {
            $table->integer('material_id');
            $table->foreign('material_id')->references('id')->on('materials')->onDelete('cascade');
            $table->integer('material_category_id');
            $table->foreign('material_category_id')->references('id')->on('material_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('material_categories');
        Schema::drop('material_material_category');
    }
}
