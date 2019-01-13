<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_carts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer')->unsigned();
            $table->integer('product')->unsigned();
            $table->integer('quantity');
            $table->date('add_date');

            $table->foreign('customer')->references('id')->on('tbl_users');
            $table->foreign('product')->references('id')->on('tbl_products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_carts');
    }
}
