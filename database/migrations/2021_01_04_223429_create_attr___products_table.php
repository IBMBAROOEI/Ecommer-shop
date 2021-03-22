<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttrProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attr___products', function (Blueprint $table) {
            $table->id();
            $table->foreign('product_id')->references('id')->on('products');
            $table->unsignedBigInteger('product_id');
            $table->string('size')->nullable();
            $table->string('price')->nullable();
            $table->string('stock')->nullable();
            $table->string('color')->nullable();
            $table->string('sku');
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
        Schema::dropIfExists('attr___products');
    }
}
