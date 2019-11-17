<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableTableauBord extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TableauBord', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('agregats');
            $table->integer('cptes');
            $table->date('moispasse');
            $table->date('moisactuele');
            $table->integer('ecartvaleur');
            $table->integer('evolution');
            $table->date('cumulpasse');
            $table->date('cumulactuele');
            $table->integer('cumulecartvaleur');
            $table->integer('cumulevolution');
            $table->string('unite');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TableauBord');
    }
}
