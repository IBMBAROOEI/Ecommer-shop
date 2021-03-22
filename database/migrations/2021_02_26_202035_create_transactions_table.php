<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
                $table->id();
                $table->string('receipt_code')->nullable();
                $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
                $table->unsignedBigInteger('order_id');
                $table->unsignedBigInteger('transaction_id')->unique()->nullable();
                $table->integer('amount')->unsigned()->nullable();
                $table->integer('status')->unsigned()->default(0);
                $table->foreign('user_id')->references('id')->on('users');
                $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('transactions');
    }
}
