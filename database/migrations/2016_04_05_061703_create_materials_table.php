<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->integer('material_type_id');
            $table->integer('user_id');
            $table->boolean('is_sumitter_author')->default(false);
            $table->integer('material_author_id');
            $table->integer('material_format_id');
            $table->text('link');
            $table->integer('language_id');
            $table->integer('license_id');
            $table->integer('material_status_id');
            $table->foreign('material_type_id')->references('id')->on('material_types');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('material_author_id')->references('id')->on('material_authors');
            $table->foreign('material_format_id')->references('id')->on('material_formats');
            $table->foreign('language_id')->references('id')->on('languages');
            $table->foreign('license_id')->references('id')->on('licenses');
            $table->foreign('material_status_id')->references('id')->on('material_status');
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
        Schema::drop('materials');
    }
}
