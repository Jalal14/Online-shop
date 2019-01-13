<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWishlistsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE VIEW view_wishlists AS 
        SELECT tbl_wishlists.id, tbl_wishlists.customer, tbl_statuses.name AS status_name, tbl_products.id AS product_id, tbl_products.name, tbl_products.category, tbl_products.company, tbl_products.buy_price, tbl_products.sell_price, tbl_products.available, tbl_products.sold, tbl_products.status, tbl_products.image, tbl_products.discount, tbl_products.added 
        FROM tbl_wishlists, tbl_products, tbl_statuses 
        WHERE tbl_wishlists.product = tbl_products.id AND tbl_products.status = tbl_statuses.id
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
