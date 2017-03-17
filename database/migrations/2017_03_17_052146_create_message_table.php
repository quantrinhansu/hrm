<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('sender'); 
            $table->integer('reciver');
            /**
              * Json return
              * content => array(
                    '0' => array(
                        'msg' => $msg,
                        'time'=> $time
                        ),
                    '1' => array(
                        'msg' => $msg,
                        'time'=> $time
                        ),
                    '2' => array(
                        'msg' => $msg,
                        'time'=> $time
                        ),
                    ...
                )
              */ 
            $table->string('content'); 
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
