<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToBusParksTable extends Migration
{
    public function up()
    {
        Schema::table('bus_parks', function (Blueprint $table) {
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id', 'country_fk_7082759')->references('id')->on('countries');
            $table->unsignedBigInteger('city_id')->nullable();
            $table->foreign('city_id', 'city_fk_7082760')->references('id')->on('cities');
        });
    }
}
