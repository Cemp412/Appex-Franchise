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
            $table->String('user_id');
            $table->String('student_name');
            $table->String('father_name');
            $table->String('dob');
            $table->String('course');
            $table->String('contact_number');
            $table->String('student_email');
            $table->String('student_password');
            $table->String('course_fee');
            $table->String('submitted_fee');
            $table->string('certificate')->default('null');
            $table->String('payment_remark');
            $table->String('payment_method');
            $table->String('registration_date');
            $table->String('regno')->nullable();
            $table->String('franchise_name');
            $table->String('image');
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
