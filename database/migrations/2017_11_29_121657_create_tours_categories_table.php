<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('tourscategories', function(Blueprint $table)
        {
            $table->increments('cat_id');
            $table->string('cat_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tourscategories');
    }
}
