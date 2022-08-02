<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdouitsTable extends Migration
{
    public function up()
    {
        Schema::create('prodouits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('mark')->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
