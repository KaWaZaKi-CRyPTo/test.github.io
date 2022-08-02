<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvenancesTable extends Migration
{
    public function up()
    {
        Schema::create('provenances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('distance')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
