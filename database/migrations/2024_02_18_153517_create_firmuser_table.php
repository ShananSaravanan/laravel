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
        Schema::create('firmuser', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('firmID')->index('fk_firmuser_firm');
            $table->unsignedInteger('userID')->index('fk_firmuser_user');
            $table->unsignedInteger('statusID')->index('fk_firmuser_status');
            $table->unsignedInteger('roleID')->index('fk_firmuser_role');
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
        Schema::dropIfExists('firmuser');
    }
};
