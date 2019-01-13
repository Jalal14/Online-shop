<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePopularCompaniesView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE VIEW view_popular_companies AS
        SELECT tbl_products.company, SUM(tbl_products.sold) AS total_sold, tbl_companies.name, tbl_companies.logo 
        FROM tbl_products, tbl_companies 
        WHERE tbl_products.company = tbl_companies.id 
        GROUP BY tbl_products.company 
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
