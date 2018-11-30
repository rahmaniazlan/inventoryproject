<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->increments('id_trans');
            $table->enum('type_trans', ['in', 'out']);
            $table->string('code_trans');
            $table->string('name_trans');
            $table->integer('prod_trans');
            $table->integer('vend_trans');
            $table->integer('cust_trans');
            $table->string('qty_trans');
            $table->date('date_trans');
        });
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
