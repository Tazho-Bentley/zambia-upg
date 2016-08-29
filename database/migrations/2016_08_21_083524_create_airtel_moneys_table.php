<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirtelMoneysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airtel_moneys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone', 10)->unique();
            $table->float('balance');
            $table->string('first_name', 25);
            $table->string('last_name', 25);
            $table->string('pin', 4);
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
        Schema::drop('airtel_moneys');
    }
}
