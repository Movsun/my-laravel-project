<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->unique();
            $table->primary('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('profile_picture')->nullable();
            $table->date('dob')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_number')->nullable();
            $table->integer('gender_id')->nullable();
            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('restrict');
            $table->timestamp('last_online')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_profiles');
    }
}
