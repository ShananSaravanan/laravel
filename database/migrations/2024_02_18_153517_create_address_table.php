<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('userID')->index('fk_address_user');
            $table->unsignedInteger('addressTypeID')->index('fk_address_addresstype');
            $table->string('addressLine1');
            $table->string('street');
            $table->string('country');
            $table->unsignedInteger('postCodeID')->index('fk_address_postcode');
            $table->unsignedInteger('statusID')->index('fk_address_status');
            $table->softDeletes();
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
        Schema::dropIfExists('address');
    }
};
