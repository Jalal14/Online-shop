<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer')->unsigned();
            $table->string('phone1', 20);
            $table->string('phone2', 20)->nullable();
            $table->text('address');
            $table->double('price');
            $table->integer('quantity')->unsigned();
            $table->integer('status')->unsigned();
            $table->date('order_date');
            $table->date('acc_date')->nullable();
            $table->integer('sell_by')->unsigned()->nullable();

            $table->foreign('customer')->references('id')->on('tbl_users');
            $table->foreign('status')->references('id')->on('tbl_statuses');
            $table->foreign('sell_by')->references('id')->on('tbl_admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_invoices');
    }
}
