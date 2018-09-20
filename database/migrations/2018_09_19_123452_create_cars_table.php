<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('plate_no')->unique();
            $table->string('model');
            $table->string('color');
            // $table->string('agency_id');
            
        });

        // Schema::table('cars', function(Blueprint $table) {

        //     $table->unsignedInteger('agency_id');
        //     $table->foreign('agency_id')->references('id')->on('agency');
            
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
