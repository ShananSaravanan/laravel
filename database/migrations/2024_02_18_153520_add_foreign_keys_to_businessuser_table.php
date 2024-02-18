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
        Schema::table('businessuser', function (Blueprint $table) {
            $table->foreign(['businessID'], 'fk_businessuser_business')->references(['id'])->on('business')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['statusID'], 'fk_businessuser_status')->references(['id'])->on('status')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['userID'], 'fk_businessuser_users')->references(['id'])->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('businessuser', function (Blueprint $table) {
            $table->dropForeign('fk_businessuser_business');
            $table->dropForeign('fk_businessuser_status');
            $table->dropForeign('fk_businessuser_users');
        });
    }
};
