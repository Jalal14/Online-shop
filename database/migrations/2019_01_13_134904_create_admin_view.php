<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE VIEW view_admins AS
        SELECT tbl_admins.*, tbl_genders.name AS gender_name, tbl_statuses.name AS status_name 
        FROM tbl_admins, tbl_genders, tbl_statuses 
        WHERE tbl_admins.gender = tbl_genders.id AND tbl_admins.status = tbl_statuses.id
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
