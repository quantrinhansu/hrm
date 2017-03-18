<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvanceSalaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advance_salary', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')->references('id')->on('users');  
            $table->string('title');    
            $table->string('amount');   
            $table->date('date');   
            $table->integer('accepter_id');  
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
