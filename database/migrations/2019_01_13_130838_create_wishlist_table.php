<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWishlistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_wishlists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer')->unsigned();
            $table->integer('product')->unsigned();
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
        Schema::dropIfExists('tbl_wishlists');
    }
}
