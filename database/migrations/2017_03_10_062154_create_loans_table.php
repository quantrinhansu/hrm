<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('employee_id')->references('id')->on('employees');  
            $table->string('title');    
            $table->date('loan_date');  
            $table->date('repayment_start_date');   
            $table->string('amount');   
            $table->string('monthly_of_interest');  
            $table->string('remaining_amount'); 
            $table->string('approval_status');  
            $table->string('description');  
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
