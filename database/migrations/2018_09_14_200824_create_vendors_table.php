<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('slug', 70)->unique()->nullable();
            $table->integer('service_id')->unsigned();
            $table->integer('location_id')->unsigned();
            $table->string('contact_person', 200)->nullable();
            $table->string('brand_name', 200)->nullable();
            $table->string('contact_number', 30)->nullable();
            $table->string('website')->nullable();
            $table->text('additional_info')->nullable();
            $table->boolean('approved')->nullable();
            $table->string('youtube_url', 150)->nullable();
            $table->string('instagram_url', 150)->nullable();
            $table->string('facebook_url', 200)->nullable();
            $table->integer('price')->nullable()->unsigned();
            $table->rememberToken();
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
        Schema::dropIfExists('vendors');
    }
}
