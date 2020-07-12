<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('matrixNumber')->unique();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('gender');
            $table->string('phoneNumber');
            $table->string('courses');
            $table->string('branch');
            $table->string('sportsType');
            $table->string('status')->default('Pending');
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
        Schema::dropIfExists('student_forms');
    }
}
