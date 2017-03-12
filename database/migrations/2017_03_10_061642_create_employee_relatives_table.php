<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeRelativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_relatives', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('employee_id')->references('id')->on('employees');  
            $table->string('full_name');    
            $table->string('address');  
            $table->string('phone_number'); 
            $table->string('relation');
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
