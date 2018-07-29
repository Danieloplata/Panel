<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('countryCode')->unique();
            $table->string('countryName')->unique();
        });

        Schema::create('country_panel', function (Blueprint $table) {
            $table->integer('panel_id');
            $table->integer('country_id');
            $table->primary(['panel_id', 'country_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
        Schema::dropIfExists('country_panel');
    }
}
