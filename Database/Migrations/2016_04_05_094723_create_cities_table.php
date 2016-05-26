<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitiesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('postcode', 20);
            $table->integer('country_id')->unsigned()->index('cities_countries_country_id_idx');
            $table->float('lat', 10, 0)->nullable();
            $table->float('lng', 10, 0)->nullable();
            $table->timestamps();
            $table->dateTime('deleted_at')->nullable();
            $table->unique(['postcode', 'name', 'country_id'], 'postcode_name_country_unique');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cities');
    }
}
