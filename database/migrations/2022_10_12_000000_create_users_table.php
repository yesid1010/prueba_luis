<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('identification');
            $table->string('name');
            $table->string('lastName');
            $table->date('dateOfBirth');
            $table->string('direction');
            $table->string('phone');
            $table->string('sex');
            $table->timestamps();

            $table->unsignedBigInteger('profesionId');
            $table->unsignedBigInteger('municipalyId');
            $table->unsignedBigInteger('transportId');


            $table->foreign('profesionId')->references('id')->on('professions')->onDelete('cascade');
            $table->foreign('municipalyId')->references('id')->on('municipalities')->onDelete('cascade');
            $table->foreign('transportId')->references('id')->on('transports')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
