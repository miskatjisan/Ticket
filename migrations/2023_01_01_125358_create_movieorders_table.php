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
        Schema::create('movieorders', function (Blueprint $table) {
            $table->id();
            $table->string('useremail');
            $table->string('name');
            $table->string('email');
            $table->string('date');
            $table->string('phone');
            $table->string('cineplex');
            $table->integer('price');
            $table->integer('seat');
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
        Schema::dropIfExists('movieorders');
    }
};
