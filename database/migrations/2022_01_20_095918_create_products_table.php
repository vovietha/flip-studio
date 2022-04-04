<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('catalog_id');
            $table->foreign('catalog_id')->references('id')->on('catalogs');
            $table->string('title');
            $table->text('description');
            $table->integer('price');
            $table->longText('details');
            $table->string('thumbnail');
            $table->string('sku');
            $table->unsignedBigInteger('stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
