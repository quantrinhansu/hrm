<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')->references('id')->on('users');
            $table->string('contract_type');
            $table->string('contract_title');
            $table->string('contract_start_date');
            $table->string('contract_end_date');
            $table->string('contract_description');
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
