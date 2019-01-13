<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE VIEW view_invoice AS
            SELECT tbl_invoices.*, tbl_users.name, tbl_users.email, tbl_statuses.name AS status_name 
            from tbl_invoices, tbl_statuses, tbl_users 
            WHERE tbl_invoices.status = tbl_statuses.id AND tbl_invoices.customer = tbl_users.id
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
