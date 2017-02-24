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
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('permanent_address');
            $table->string('present_address');
            $table->string('date_of_birth');
            $table->string('joining_date');
            $table->string('nationality');
            $table->string('phone_number');
            $table->string('bank_account_name');
            $table->string('bank_name');
            $table->string('insurance_code');
            $table->string('tax_code');
            $table->string('maritial_status');
            $table->string('job_position');
            $table->string('job_department');
            $table->string('job_team');
            $table->string('job_type');
            $table->string('noted');
            $table->string('avatar');
            $table->string('total_leave_yearly');         
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
