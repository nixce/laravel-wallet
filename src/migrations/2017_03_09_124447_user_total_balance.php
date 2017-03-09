<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserTotalBalance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_total_balance', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->decimal('total_balance',10,2);
            $table->date('modify_date');
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_total_balance', function (Blueprint $table) {
            //
        });
    }
}
