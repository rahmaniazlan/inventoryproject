<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor', function (Blueprint $table) {
            $table->increments('id_vend');
            $table->string('code_vend');
            $table->string('name_vend');
            $table->string('email_vend');
            $table->string('phone_vend');
            $table->text('address_vend');
            $table->enum('status_vend', ['y', 'n']);
            $table->dateTime('joindate_vend');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendor');
    }
}
