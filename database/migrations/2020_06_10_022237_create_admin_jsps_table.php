<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminJspsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_jsps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('matrixNumber')->unique();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('gender');
            $table->string('phoneNumber');
            $table->string('role');
            $table->string('emailAddress')->unique();
            $table->string('courses');
            $table->string('branch');
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
        Schema::dropIfExists('admin_jsps');
    }
}
