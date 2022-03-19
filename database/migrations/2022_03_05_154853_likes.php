<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Likes extends Migration
{
    // /**
    //  * Run the migrations.
    //  *
    //  * @return void
    //  */
    // public function up()
    // {
    //     Schema::create('likes', function (Blueprint $table) {


    //         $table->integer('car_id')->unsigned();
    //         $table->integer('customer_id')->unsigned();

    //         $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
    //         $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');

    //     });
    // }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->foreignId('car_id')->constrained('cars');
            $table->foreignId('customer_id')->constrained('customers');

        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likes');
    }
}
