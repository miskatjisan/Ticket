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
        Schema::create('airorders', function (Blueprint $table) {
            $table->id();
            $table->string('useremail');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->float('vat');
            $table->string('from');
            $table->string('to');
            $table->string('departure');
            $table->string('return');
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
        Schema::dropIfExists('airorders');
    }
};
