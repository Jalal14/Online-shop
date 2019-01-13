<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product')->unsigned();
            $table->integer('quantity')->unsigned();
            $table->double('unit_price');
            $table->double('sold_discount');
            $table->double('total');
            $table->integer('invoice')->unsigned();

            $table->foreign('product')->references('id')->on('tbl_admins');
            $table->foreign('invoice')->references('id')->on('tbl_invoices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_orders');
    }
}
