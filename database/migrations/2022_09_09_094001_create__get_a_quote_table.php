<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGetAQuoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('get_a_quote', function (Blueprint $table) {
            $table->id();
            $table->string('Username');
            $table->string('email');
            $table->string('PhoneNum');
            $table->string('CName');
            $table->string('Subject');
            $table->string('Money');
            $table->string('msgs');
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
        Schema::dropIfExists('_get_a_quote');
    }
}
