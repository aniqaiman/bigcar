<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    public function up()
    {
        Schema::create('tours', function (Blueprint $table)
        {
            $table->increments('tour_id');
            $table->string('tour_name');
            $table->date('tour_date');
            $table->integer('tour_pax');
            $table->string('tour_cat');
            $table->string('tour_image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
