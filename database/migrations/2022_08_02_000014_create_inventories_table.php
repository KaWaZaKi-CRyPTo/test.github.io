<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('qtt_init')->nullable();
            $table->integer('final_qtt')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
