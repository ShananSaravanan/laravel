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
        Schema::create('packagebase', function (Blueprint $table) {
            $table->increments('id');
            $table->string('packagecode');
            $table->string('name');
            $table->string('userlimit');
            $table->unsignedInteger('statusID')->index('fk_packagebase_status');
            $table->softDeletes();
            $table->timestamps();
            $table->timestamp('inactivedate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packagebase');
    }
};
