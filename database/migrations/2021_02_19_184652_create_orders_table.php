<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreign('users_id')->references('id')->on('users');
            $table->unsignedBigInteger('users_id');
            $table->foreign('addresse_id')->references('id')->on('addresses');
            $table->unsignedBigInteger('addresse_id');
            $table->enum('status', ['pending', 'processing', 'completed', 'decline'])->default('pending');
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
        Schema::dropIfExists('orders');
    }
}
