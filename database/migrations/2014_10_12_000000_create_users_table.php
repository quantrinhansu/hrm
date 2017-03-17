<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('role')->default('1'); 
            $table->string('active')->default('1');   
            $table->string('gender')->default('male');   
            $table->string('avatar')->default('/images/user_default.png');  
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('present_address')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->date('joining_date')->nullable();
            $table->string('nationality')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('bank_account_name')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('insurance_code')->nullable();
            $table->string('tax_code')->nullable();
            $table->string('maritial_status')->nullable();
            $table->string('job_position')->nullable();
            $table->integer('department_id')->references('id')->on('departments')->nullable();
            $table->string('team_id')->nullable();
            $table->string('job_type')->nullable();
            $table->string('noted')->nullable();
            $table->string('leave_per_month')->default('1'); 
            $table->string('leave_per_year')->default('1');  
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
        Schema::dropIfExists('users');
    }
}
