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
        Schema::table('postcode', function (Blueprint $table) {
            $table->foreign(['postOfficeID'], 'fk_postcode_postoffice')->references(['id'])->on('postoffice')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['stateCodeID'], 'fk_postcode_statecode')->references(['id'])->on('statecode')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['statusID'], 'fk_postcode_status')->references(['id'])->on('status')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('postcode', function (Blueprint $table) {
            $table->dropForeign('fk_postcode_postoffice');
            $table->dropForeign('fk_postcode_statecode');
            $table->dropForeign('fk_postcode_status');
        });
    }
};
