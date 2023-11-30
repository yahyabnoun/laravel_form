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
        Schema::create('interest_students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('interest_studentid');
            $table->unsignedBigInteger('interest_id');
            $table->integer('confirmed');
            $table->timestamps();

            $table->foreign('interest_studentid')->references('id')->on('students');
            $table->foreign('interest_id')->references('id')->on('interests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interest_students');
    }
};
