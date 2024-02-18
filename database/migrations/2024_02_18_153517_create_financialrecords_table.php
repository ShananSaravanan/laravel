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
        Schema::create('financialrecords', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('categoryID')->index('fk_financialrecords_business');
            $table->unsignedInteger('assignmentID')->index('fk_assignment_business');
            $table->string('recordCategory');
            $table->string('description');
            $table->string('recordedtime', 0);
            $table->unsignedInteger('statusID')->index('fk_financialrecords_status');
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
        Schema::dropIfExists('financialrecords');
    }
};
