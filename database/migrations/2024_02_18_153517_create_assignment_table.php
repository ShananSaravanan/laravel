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
        Schema::create('assignment', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('businessUserID')->index('fk_assignment_businessuser');
            $table->unsignedInteger('firmUserID')->index('fk_assignment_firmuser');
            $table->string('appointedDateValidFrom', 0);
            $table->string('appointedDateValidTo', 0);
            $table->string('allowedAccessCode');
            $table->unsignedInteger('statusID')->index('fk_assignment_status');
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
        Schema::dropIfExists('assignment');
    }
};
