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
        Schema::table('assignment', function (Blueprint $table) {
            $table->foreign(['businessUserID'], 'fk_assignment_businessuser')->references(['id'])->on('businessuser')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['firmUserID'], 'fk_assignment_firmuser')->references(['id'])->on('firmuser')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['statusID'], 'fk_assignment_status')->references(['id'])->on('status')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('assignment', function (Blueprint $table) {
            $table->dropForeign('fk_assignment_businessuser');
            $table->dropForeign('fk_assignment_firmuser');
            $table->dropForeign('fk_assignment_status');
        });
    }
};
