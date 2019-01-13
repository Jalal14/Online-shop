<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE VIEW view_carts AS
        SELECT tbl_carts.id AS cart_id, tbl_carts.customer, tbl_carts.quantity, tbl_carts.add_date, tbl_products.*, tbl_statuses.name AS status_name 
        from tbl_carts, tbl_products, tbl_statuses 
        WHERE tbl_carts.product = tbl_products.id  AND tbl_products.status = tbl_statuses.id
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
