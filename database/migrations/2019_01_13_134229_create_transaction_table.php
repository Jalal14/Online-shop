<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->double('amount');
            $table->date('tr_date');
            $table->integer('type')->unsigned();
            $table->integer('acc_by')->unsigned();
            $table->integer('invoice')->unsigned()->nullable();
            $table->integer('buy_id')->unsigned()->nullable();

            $table->foreign('type')->references('id')->on('tbl_types');
            $table->foreign('acc_by')->references('id')->on('tbl_admins');
            $table->foreign('invoice')->references('id')->on('tbl_invoices');
            $table->foreign('buy_id')->references('id')->on('tbl_buy_history');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_transactions');
    }
}
