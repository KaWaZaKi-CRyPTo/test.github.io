<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOilsTable extends Migration
{
    public function up()
    {
        Schema::create('oils', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mark_oil');
            $table->integer('oil_distance')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
