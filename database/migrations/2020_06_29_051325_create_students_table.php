<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('matrixNumber')->unique();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('gender');
            $table->string('phoneNumber');
            $table->string('emailAddress')->unique();
            $table->string('courses');
            $table->string('branch');
            $table->string('sportsType');
            $table->string('sportsAchievementOne');
            $table->string('sportsAchievementTwo');
            $table->string('sportsAchievementThree');
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
        Schema::dropIfExists('students');
    }
}
