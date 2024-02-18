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
        Schema::table('users', function (Blueprint $table) {
            $table->foreign(['statusID'], 'fk_users_status')->references(['id'])->on('status')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['HonorificCodeID'], 'fk_user_honorificcode')->references(['id'])->on('honorificcode')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['RoleID'], 'fk_user_role')->references(['id'])->on('role')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('fk_users_status');
            $table->dropForeign('fk_user_honorificcode');
            $table->dropForeign('fk_user_role');
        });
    }
};
