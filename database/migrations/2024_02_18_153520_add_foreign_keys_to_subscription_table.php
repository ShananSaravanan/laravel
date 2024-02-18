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
        Schema::table('subscription', function (Blueprint $table) {
            $table->foreign(['packageID'], 'fk_subscription_package')->references(['id'])->on('package')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['statusID'], 'fk_subscription_status')->references(['id'])->on('status')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['TransactionID'], 'fk_subscription_transaction')->references(['id'])->on('transaction')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['userID'], 'fk_subscription_user')->references(['id'])->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subscription', function (Blueprint $table) {
            $table->dropForeign('fk_subscription_package');
            $table->dropForeign('fk_subscription_status');
            $table->dropForeign('fk_subscription_transaction');
            $table->dropForeign('fk_subscription_user');
        });
    }
};
