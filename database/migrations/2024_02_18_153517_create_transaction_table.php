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
        Schema::create('transaction', function (Blueprint $table) {
            $table->increments('id');
            $table->string('transactionNo');
            $table->string('name');
            $table->string('paymentDateTime', 0);
            $table->double('amount', 8, 2);
            $table->string('FPX_ID');
            $table->string('BankID');
            $table->string('FPX_CheckSum');
            $table->unsignedInteger('statusID')->index('fk_transaction_status');
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
        Schema::dropIfExists('transaction');
    }
};
