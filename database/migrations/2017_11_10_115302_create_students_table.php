<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('matricNo');
            $table->string('surname');
            $table->string('firstName');
            $table->string('userName');
            $table->string('faculty');
            $table->string('department');
            $table->string('level');
            $table->string('email');
            $table->string('phoneNo');
            $table->string('gender');
            $table->date('dob');
            $table->string('photoId');
            $table->string('password');
            $table->rememberToken();
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
