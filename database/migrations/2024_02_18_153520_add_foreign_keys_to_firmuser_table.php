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
        Schema::table('firmuser', function (Blueprint $table) {
            $table->foreign(['firmID'], 'fk_firmuser_firm')->references(['id'])->on('firm')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['roleID'], 'fk_firmuser_role')->references(['id'])->on('role')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['statusID'], 'fk_firmuser_status')->references(['id'])->on('status')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['userID'], 'fk_firmuser_user')->references(['id'])->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('firmuser', function (Blueprint $table) {
            $table->dropForeign('fk_firmuser_firm');
            $table->dropForeign('fk_firmuser_role');
            $table->dropForeign('fk_firmuser_status');
            $table->dropForeign('fk_firmuser_user');
        });
    }
};
