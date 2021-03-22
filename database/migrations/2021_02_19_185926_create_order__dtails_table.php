<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDtailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order__dtails', function (Blueprint $table) {
            $table->id();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->unsignedBigInteger('order_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->unsignedBigInteger('product_id');
            $table->foreign('atribute_id')->references('id')->on('attr___products');
            $table->unsignedBigInteger('atribute_id');
            $table->string('name_product');
            $table->string('code_product');
            $table->string('size');
            $table->string('color');
            $table->string('sku');
            $table->decimal('order_total', 10, 6);
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
        Schema::dropIfExists('order__dtails');
    }
}
