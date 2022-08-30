<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');
            $table->bigInteger('city_id')->unsigned();
            $table->bigInteger('builder_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->string('address');
            $table->string('num_rooms');
            $table->string('num_bathrooms');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('city_id')->references('id')->on('city');
            $table->foreign('builder_id')->references('id')->on('builder');
            $table->foreign('category_id')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project');
    }
}
