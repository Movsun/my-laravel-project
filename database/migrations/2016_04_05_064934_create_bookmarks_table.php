<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookmarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookmarks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('license_id');
            $table->foreign('license_id')->references('id')->on('licenses');
            $table->timestamps();
        });
        Schema::create('bookmark_material', function (Blueprint $table) {
            $table->integer('material_id');
            $table->integer('bookmark_id');
            $table->foreign('material_id')->references('id')->on('materials');
            $table->foreign('bookmark_id')->references('id')->on('bookmarks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bookmarks');
        Schema::drop('bookmark_material');
    }
}
