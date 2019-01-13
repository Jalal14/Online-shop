<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_specifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product')->unsigned();
            $table->text('title');
            $table->text('specification');

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
        Schema::dropIfExists('tbl_specifications');
    }
}
