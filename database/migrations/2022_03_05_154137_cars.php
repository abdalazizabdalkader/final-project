<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');


            $table->boolean('avilable')->default(1);
            $table->integer('running_volume');
            $table->integer('cylinders');
            $table->integer('horsepower');
            $table->integer('consumption');
            $table->double('price');
            $table->integer('views');
            $table->timestamps();


            $table->foreignId('agency_id')->constrained('agencies');
            $table->foreignId('brand_id')->constrained('brands');
            $table->foreignId('color_id')->constrained('colors');
            $table->foreignId('type_id')->constrained('types');
            $table->foreignId('country_id')->constrained('countries');


        });
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
