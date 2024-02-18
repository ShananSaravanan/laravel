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
        Schema::create('firm', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firmName');
            $table->unsignedInteger('firmTypeID')->index('fk_firm_firmtype');
            $table->unsignedInteger('addressID')->index('fk_firm_address');
            $table->string('AF_NO');
            $table->string('SSM_NO');
            $table->string('contactNo');
            $table->string('emailAddress');
            $table->string('status');
            $table->integer('userLimit');
            $table->string('logo');
            $table->unsignedInteger('statusID')->index('fk_firm_status');
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
        Schema::dropIfExists('firm');
    }
};
