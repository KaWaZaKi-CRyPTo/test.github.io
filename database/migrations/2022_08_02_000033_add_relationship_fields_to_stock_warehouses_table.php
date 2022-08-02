<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToStockWarehousesTable extends Migration
{
    public function up()
    {
        Schema::table('stock_warehouses', function (Blueprint $table) {
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id', 'country_fk_7082696')->references('id')->on('countries');
            $table->unsignedBigInteger('city_id')->nullable();
            $table->foreign('city_id', 'city_fk_7082697')->references('id')->on('cities');
        });
    }
}
