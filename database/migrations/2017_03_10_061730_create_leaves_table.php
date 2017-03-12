<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('employee_id')->references('id')->on('employees');  
            $table->integer('accepter_id')->references('id')->on('admin');  
            $table->string('description');  
            $table->string('type'); 
            $table->date('from');   
            $table->date('to'); 
            $table->integer('accept');  
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
