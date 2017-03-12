<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOvertimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('overtime', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')->references('id')->on('users');  
            $table->string('type'); 
            $table->date('date');   
            $table->string('from'); 
            $table->string('to');   
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
