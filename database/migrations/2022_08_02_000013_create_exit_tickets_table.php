<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExitTicketsTable extends Migration
{
    public function up()
    {
        Schema::create('exit_tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date')->nullable();
            $table->integer('qtt')->nullable();
            $table->string('number_exit_ticker')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
