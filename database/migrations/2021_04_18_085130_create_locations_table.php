<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('bike_id')->unsigned();
            $table->date('date');
            $table->decimal('longitudes', $precision = 9, $scale = 6);
            $table->decimal('latitudes', $precision = 8, $scale = 6);
            $table->timestamps();

            $table->foreign('bike_id')->references('id')->on('bikes')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
