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
        Schema::table('firm', function (Blueprint $table) {
            $table->foreign(['addressID'], 'fk_firm_address')->references(['id'])->on('address')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['firmTypeID'], 'fk_firm_firmtype')->references(['id'])->on('firmtype')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['statusID'], 'fk_firm_status')->references(['id'])->on('status')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('firm', function (Blueprint $table) {
            $table->dropForeign('fk_firm_address');
            $table->dropForeign('fk_firm_firmtype');
            $table->dropForeign('fk_firm_status');
        });
    }
};
