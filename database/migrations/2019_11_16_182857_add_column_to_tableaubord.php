<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToTableaubord extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tableaubord', function (Blueprint $table) {
            $table->integer('valmoispasse');
            $table->integer('valmoisactuel');
            $table->integer('valcumulmoispasse');
            $table->integer('valcumulmoisactuel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tableaubord', function (Blueprint $table) {
            $table->dropColumn(['valmoispasse']);
            $table->dropColumn(['valmoisactuel']);
            $table->dropColumn(['valcumulmoispasse']);
            $table->dropColumn(['valcumulmoisactuel']);
        });
    }
}
