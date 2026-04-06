<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_form', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('ContactNum');
            $table->string('DOB');
            $table->enum('gender',['male' ,'female']);
            $table->string('address');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('Zip');
            $table->string('PrimarySkills');
            $table->string('SecondarySkills');
            $table->string('experience');
            $table->string('CurrentEmployer');
            $table->string('qualification');
            $table->string('resume');
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
        Schema::dropIfExists('_apply_form');
    }
}
