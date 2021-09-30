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
            $table->id();
            $table->foreignId('user_id');
            $table->string('name');
            $table->date('dob',10);
            $table->tinyInteger('gender')->default(1);
            $table->string('nationality',50)->nullable();
            $table->string('email',100)->nullable();
            $table->string('phone_no')->nullable();
            $table->string('note',500)->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_phone_no')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_phone_no')->nullable();
            $table->string('address',500)->nullable();
            $table->foreignId('grade_id')->default(1);
            $table->tinyInteger('status')->default(1);
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
