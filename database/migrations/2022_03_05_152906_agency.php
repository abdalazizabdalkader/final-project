<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Agency extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('email')->unique();
            $table->string('photo')->nullable();
            // $table->string('password');
            $table->dateTime('end_subscription');
            $table->unsignedSmallInteger('subscription_month');
            // $table->dateTime('last_login')->nullable();
            $table->boolean('avilable')->default(1);
            $table->timestamps();
            // $table->foreignId('subscription_id')->constrained('subscriptions');

            $table->string('password');
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();

        });
    }


    public function down()
    {
        Schema::dropIfExists('agencies');
    }
}
