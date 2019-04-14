<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     * заказы
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned()->default(1);
            $table->foreign('id_user')->references('id')->on('users');
            $table->integer('id_products')->unsigned()->default(1);
            $table->foreign('id_products')->references('id')->on('products');
            $table->integer('amount');
            $table->integer('price_piece');
            $table->integer('sum');

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
