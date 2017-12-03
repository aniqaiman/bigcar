<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('toursdetails', function (Blueprint $table)
        {
            $table->increments('tourdetails_id');
            $table->string('details_name');
            $table->string('tour_places');
            $table->string('tour_duration');
            $table->string('tour_map');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('toursdetails');
    }
}
