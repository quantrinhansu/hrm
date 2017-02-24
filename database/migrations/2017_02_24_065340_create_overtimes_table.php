<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOvertimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('overtime', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('type');
            $table->string('date');
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
