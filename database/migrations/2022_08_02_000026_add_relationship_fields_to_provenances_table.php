<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToProvenancesTable extends Migration
{
    public function up()
    {
        Schema::table('provenances', function (Blueprint $table) {
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id', 'country_fk_7082676')->references('id')->on('countries');
        });
    }
}
