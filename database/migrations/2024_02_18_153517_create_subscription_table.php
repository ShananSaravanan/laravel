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
        Schema::create('subscription', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('userID')->index('fk_subscription_user');
            $table->unsignedInteger('packageID')->index('fk_subscription_package');
            $table->string('addOnID');
            $table->string('DateValidFrom', 0);
            $table->string('DateValidTo', 0);
            $table->double('PaidAmount', 8, 2);
            $table->unsignedInteger('TransactionID')->index('fk_subscription_transaction');
            $table->string('approvedBankName');
            $table->string('cancelledDate', 0);
            $table->unsignedInteger('statusID')->index('fk_subscription_status');
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
        Schema::dropIfExists('subscription');
    }
};
