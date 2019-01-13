<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100)->unique();
            $table->integer('category')->unsigned();
            $table->integer('company')->unsigned();
            $table->double('buy_price');
            $table->double('sell_price');
            $table->integer('available');
            $table->integer('sold');
            $table->integer('status')->unsigned();
            $table->string('image', 100);
            $table->float('discount');
            $table->date('added');

            $table->foreign('category')->references('id')->on('tbl_categories');
            $table->foreign('company')->references('id')->on('tbl_companies');
            $table->foreign('status')->references('id')->on('tbl_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_products');
    }
}
