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
        Schema::create('postcode', function (Blueprint $table) {
            $table->increments('id');
            $table->string('postcode');
            $table->string('location');
            $table->unsignedInteger('postOfficeID')->index('fk_postcode_postoffice');
            $table->unsignedInteger('stateCodeID')->index('fk_postcode_statecode');
            $table->unsignedInteger('statusID')->index('fk_postcode_status');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postcode');
    }
};
