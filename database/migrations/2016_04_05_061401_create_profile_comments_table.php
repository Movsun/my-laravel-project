<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('comment');
            $table->integer('rating_score');
            $table->timestamps();
            $table->integer('by_user_id');
            $table->integer('on_user_id');
            $table->foreign('by_user_id')->references('id')->on('users');
            $table->foreign('on_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('profile_comments');
    }
}
