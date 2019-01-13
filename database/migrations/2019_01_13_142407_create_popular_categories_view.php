<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePopularCategoriesView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE VIEW view_popular_categories AS
        SELECT tbl_products.category, SUM(tbl_products.sold) AS total_sold, tbl_categories.name 
        FROM tbl_products, tbl_categories 
        WHERE tbl_products.category = tbl_categories.id 
        GROUP BY tbl_products.category 
        ORDER BY SUM(tbl_products.sold) DESC
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
