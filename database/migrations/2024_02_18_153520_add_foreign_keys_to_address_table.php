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
        Schema::table('address', function (Blueprint $table) {
            $table->foreign(['addressTypeID'], 'fk_address_addresstype')->references(['id'])->on('addresstype')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['postCodeID'], 'fk_address_postcode')->references(['id'])->on('postcode')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['statusID'], 'fk_address_status')->references(['id'])->on('status')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['userID'], 'fk_address_user')->references(['id'])->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('address', function (Blueprint $table) {
            $table->dropForeign('fk_address_addresstype');
            $table->dropForeign('fk_address_postcode');
            $table->dropForeign('fk_address_status');
            $table->dropForeign('fk_address_user');
        });
    }
};
