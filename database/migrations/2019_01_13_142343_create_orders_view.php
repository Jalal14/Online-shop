<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE VIEW view_orders AS
        SELECT tbl_products.*, tbl_orders.quantity, tbl_orders.unit_price, tbl_orders.sold_discount, tbl_orders.total, tbl_invoices.id AS invoice_id, tbl_invoices.customer 
        FROM tbl_products, tbl_orders, tbl_invoices 
        WHERE tbl_invoices.id = tbl_orders.invoice and tbl_orders.product = tbl_products.id
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
