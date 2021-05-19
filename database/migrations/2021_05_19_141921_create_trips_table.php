<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('destination_country', 60);
            $table->string('destination_cities', 120);
            $table->text('description')->nullable();
            $table->string('accomodation', 60);
            $table->string('treatment', 60);
            $table->text('number_of_people');
            $table->tinyInteger('children')->unsigned()->default(0);
            $table->string('duration', 20);
            $table->date('departure')->nullable();
            $table->date('return')->nullable();
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
        Schema::dropIfExists('trips');
    }
}
