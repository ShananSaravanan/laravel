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
        Schema::table('business', function (Blueprint $table) {
            $table->foreign(['businesstypeID'], 'fk_business_businesstype')->references(['id'])->on('businesstype')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['statusID'], 'fk_business_status')->references(['id'])->on('status')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('business', function (Blueprint $table) {
            $table->dropForeign('fk_business_businesstype');
            $table->dropForeign('fk_business_status');
        });
    }
};
