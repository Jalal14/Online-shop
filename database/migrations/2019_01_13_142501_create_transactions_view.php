<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE VIEW view_transactions AS
        SELECT tbl_transactions.*, tbl_types.type AS type_name, tbl_admins.name AS admin_name, tbl_admins.email AS admin_email 
        FROM tbl_transactions, tbl_types, tbl_admins 
        WHERE tbl_transactions.type = tbl_types.id AND tbl_transactions.acc_by = tbl_admins.id
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
