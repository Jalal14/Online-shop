<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpdatedByHistoryView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE VIEW view_updated_buy_history AS
        SELECT tbl_buy_history.*, tbl_products.name, tbl_products.image, tbl_categories.name AS category_name, tbl_companies.name AS company_name, tbl_statuses.name AS status_name, tbl_admins.uname AS username 
        FROM tbl_buy_history, tbl_products, tbl_categories, tbl_companies, tbl_statuses, tbl_admins 
        WHERE tbl_buy_history.product = tbl_products.id AND tbl_products.category = tbl_categories.id AND tbl_products.company = tbl_companies.id AND tbl_products.status = tbl_statuses.id AND tbl_buy_history.update_emp = tbl_admins.id
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
