<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntryTicketsTable extends Migration
{
    public function up()
    {
        Schema::create('entry_tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->integer('qtt');
            $table->decimal('price', 15, 2)->nullable();
            $table->string('n_bon_com')->nullable();
            $table->string('n_rec_fac_bl')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
