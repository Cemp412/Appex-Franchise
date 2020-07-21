<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFranchisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franchises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('franchise_name');
            $table->string('franchise_code');
            $table->string('franchise_password');
            $table->string('franchise_email');

            $table->string('contact_name');
            $table->string('contact_number');
            $table->string('address');
            $table->string('account_number');
            $table->string('ifsc_code');
            $table->string('account_holder');
            $table->string('bank_name');
            $table->string('status')->default(0);
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
        Schema::dropIfExists('franchises');
    }
}
