<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('id_cust');
            $table->string('code_cust');
            $table->string('name_cust');
            $table->string('email_cust');
            $table->string('phone_cust');
            $table->text('address_cust');
            $table->enum('status_cust', ['y', 'n']);
            $table->dateTime('joindate_cust');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
