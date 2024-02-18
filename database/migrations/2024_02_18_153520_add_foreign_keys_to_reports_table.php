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
        Schema::table('reports', function (Blueprint $table) {
            $table->foreign(['assignmentID'], 'fk_reports_assignment')->references(['id'])->on('assignment')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['templateID'], 'fk_reports_reporttemplate')->references(['id'])->on('reporttemplate')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['statusID'], 'fk_reports_status')->references(['id'])->on('status')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reports', function (Blueprint $table) {
            $table->dropForeign('fk_reports_assignment');
            $table->dropForeign('fk_reports_reporttemplate');
            $table->dropForeign('fk_reports_status');
        });
    }
};
