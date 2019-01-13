<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('uname', 50)->unique();
            $table->string('email', 100)->unique();
            $table->text('password');
            $table->string('phone1', 20);
            $table->string('phone2', 20)->nullable();
            $table->integer('gender')->unsigned();
            $table->date('dob');
            $table->text('address');
            $table->date('join_date');
            $table->string('photo', 100);
            $table->boolean('role');
            $table->integer('status')->unsigned();

            $table->foreign('gender')->references('id')->on('tbl_genders');
            $table->foreign('status')->references('id')->on('tbl_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_admins');
    }
}
