<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_buy_history', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product')->unsigned();
            $table->integer('quantity');
            $table->double('total_price');
            $table->double('sell_price');
            $table->date('buy_date');
            $table->integer('employee')->unsigned();
            $table->date('updated')->nullable();
            $table->integer('update_emp')->unsigned()->nullable();

            $table->foreign('product')->references('id')->on('tbl_products');
            $table->foreign('employee')->references('id')->on('tbl_admins');
            $table->foreign('update_emp')->references('id')->on('tbl_admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_buy_history');
    }
}
