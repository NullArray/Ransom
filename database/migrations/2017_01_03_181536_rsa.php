<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rsa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rsa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('computer_identifier');
            $table->string('rsa_identifier');
            $table->string('wallet_address');
            $table->string('ip');
            $table->string('country');
            $table->string('state');
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
        Schema::dropIfExists('rsa');
    }
}
