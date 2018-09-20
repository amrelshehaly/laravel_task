<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateuserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->integer('age');
            $table->string('email')->unique();
            $table->string('password');
            
        });

        // Schema::table('user', function(Blueprint $table) {

        //     $table->unsignedInteger('car_id');
        //     $table->foreign('car_id')->references('id')->on('cars');
            
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
