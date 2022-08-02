<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusesTable extends Migration
{
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bus_number');
            $table->string('counetr')->nullable();
            $table->string('mark')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
