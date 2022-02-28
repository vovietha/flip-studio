<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FkParentIdColumnToCatalogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('catalogs', function (Blueprint $table) {
            $table->foreign('parent_id')->references('id')->on('catalogs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('catalogs_', function (Blueprint $table) {
            $table->dropForeign('[parent_id]');
        });
    }
}
