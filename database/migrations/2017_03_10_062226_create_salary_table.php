<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('employee_id')->references('id')->on('employees');  
            $table->integer('accepter_id')->references('id')->on('admin');  
            $table->string('description');  
            $table->string('type'); 
            $table->string('form'); 
            $table->string('to');   
            $table->string('payslip_id')->references('id')->on('payslip');  
            $table->string('advancesalary_id')->references('id')->on('advancesalary');  
            $table->string('commission_id')->references('id')->on('commissions');   
            $table->string('insurance_id')->references('id')->on('insurance');  
            $table->string('overtime_id')->references('id')->on('overtime');    
            $table->string('loan_id')->on('loan');  
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
