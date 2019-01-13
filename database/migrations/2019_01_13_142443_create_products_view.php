<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE VIEW view_products AS
        SELECT tbl_products.*, tbl_categories.name AS category_name, tbl_companies.name AS company_name, tbl_statuses.name AS status_name 
        FROM tbl_products, tbl_categories, tbl_companies, tbl_statuses 
        WHERE tbl_products.category = tbl_categories.id AND  tbl_products.company = tbl_companies.id AND tbl_products.status =  tbl_statuses.id
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
