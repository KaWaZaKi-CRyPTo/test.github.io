<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVidangeControlesTable extends Migration
{
    public function up()
    {
        Schema::create('vidange_controles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('anicien_number');
            $table->integer('new_number');
            $table->date('last_date')->nullable();
            $table->date('date')->nullable();
            $table->integer('oil_qtt');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
