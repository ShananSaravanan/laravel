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
        Schema::create('businessuser', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('businessID')->index('fk_businessuser_business');
            $table->unsignedInteger('userID')->index('fk_businessuser_users');
            $table->unsignedInteger('statusID')->index('fk_businessuser_status');
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
        Schema::dropIfExists('businessuser');
    }
};
