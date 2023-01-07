<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moviepayments', function (Blueprint $table) {
            $table->id();
            $table->string('useremail');
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->integer('zip');
            $table->integer('total');
            $table->integer('creditnumber');
            $table->string('expmonth');
            $table->string('expyear');
            $table->integer('cvv');
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
        Schema::dropIfExists('moviepayments');
    }
};
