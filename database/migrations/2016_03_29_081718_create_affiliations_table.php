<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffiliationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->integer('education_type_id')->unsigned();
            $table->foreign('education_type_id')->references('id')->on('education_types')->onDelete('cascade');
            $table->integer('organization_type_id')->unsigned();
            $table->foreign('organization_type_id')->references('id')->on('organization_types')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('affiliation_user', function (Blueprint $table){
            $table->integer('user_id')->unsigned()->index();
            $table->integer('affiliation_id')->unsigned()->index();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('affiliation_id')->references('id')->on('affiliations')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('affiliations');
        Schema::drop('affiliation_user');
    }
}
