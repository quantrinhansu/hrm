<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')->references('id')->on('users');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('permanent_address');
            $table->string('present_address');
            $table->date('date_of_birth');
            $table->date('joining_date');
            $table->string('nationality');
            $table->string('phone_number');
            $table->string('bank_account_name');
            $table->string('bank_name');
            $table->string('insurance_code');
            $table->string('tax_code');
            $table->string('maritial_status');
            $table->string('job_position');
            $table->integer('department_id')->references('id')->on('departments');
            $table->string('team_id');
            $table->string('job_type');
            $table->string('noted');
            $table->string('avatar');
            $table->string('total_leave_yearly');
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
        //
    }
}
