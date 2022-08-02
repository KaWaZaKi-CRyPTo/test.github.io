<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToRoutesTable extends Migration
{
    public function up()
    {
        Schema::table('routes', function (Blueprint $table) {
            $table->unsignedBigInteger('start_provenance_id')->nullable();
            $table->foreign('start_provenance_id', 'start_provenance_fk_6817878')->references('id')->on('provenances');
            $table->unsignedBigInteger('end_provenance_id')->nullable();
            $table->foreign('end_provenance_id', 'end_provenance_fk_6817880')->references('id')->on('provenances');
        });
    }
}
