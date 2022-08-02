<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToVidangeControlesTable extends Migration
{
    public function up()
    {
        Schema::table('vidange_controles', function (Blueprint $table) {
            $table->unsignedBigInteger('bus_id')->nullable();
            $table->foreign('bus_id', 'bus_fk_6817890')->references('id')->on('buses');
            $table->unsignedBigInteger('oil_id')->nullable();
            $table->foreign('oil_id', 'oil_fk_6817891')->references('id')->on('oils');
        });
    }
}
