<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCountryTranslationsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id')->unsigned();
            $table->string('locale', 4);
            $table->string('title', 45);
            $table->timestamps();
            $table->dateTime('deleted_at')->nullable();
            $table->unique(['country_id', 'locale'], 'uniqueLocaleCombo');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('country_translations');
    }
}
