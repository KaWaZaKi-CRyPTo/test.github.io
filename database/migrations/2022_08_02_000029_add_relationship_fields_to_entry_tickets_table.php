<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToEntryTicketsTable extends Migration
{
    public function up()
    {
        Schema::table('entry_tickets', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id', 'product_fk_6817913')->references('id')->on('prodouits');
            $table->unsignedBigInteger('suplier_id')->nullable();
            $table->foreign('suplier_id', 'suplier_fk_6817916')->references('id')->on('fourniseurs');
        });
    }
}
