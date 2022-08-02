<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToExitTicketsTable extends Migration
{
    public function up()
    {
        Schema::table('exit_tickets', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id', 'product_fk_6892725')->references('id')->on('prodouits');
            $table->unsignedBigInteger('bus_number_id')->nullable();
            $table->foreign('bus_number_id', 'bus_number_fk_6892728')->references('id')->on('buses');
        });
    }
}
