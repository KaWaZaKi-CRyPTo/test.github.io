<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToBusesTable extends Migration
{
    public function up()
    {
        Schema::table('buses', function (Blueprint $table) {
            $table->unsignedBigInteger('park_id')->nullable();
            $table->foreign('park_id', 'park_fk_7082794')->references('id')->on('bus_parks');
        });
    }
}
