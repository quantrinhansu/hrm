<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')->references('id')->on('users');
            $table->string('name');
            $table->string('maritial_status');
            $table->string('mobile_no');
            $table->date('date_of_birth');
            $table->string('present_address');
            $table->date('joining_date');
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
