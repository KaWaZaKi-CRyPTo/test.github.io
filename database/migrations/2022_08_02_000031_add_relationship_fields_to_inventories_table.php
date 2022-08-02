<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToInventoriesTable extends Migration
{
    public function up()
    {
        Schema::table('inventories', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id', 'product_fk_6892763')->references('id')->on('prodouits');
        });
    }
}
