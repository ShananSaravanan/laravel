<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFailedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Check if the table already exists
        if (!Schema::hasTable('failed_jobs')) {
            // If it doesn't exist, create the table
            Schema::create('failed_jobs', function (Blueprint $table) {
                $table->id();
                $table->uuid('uuid');
                $table->text('connection'); // Change the type to text
                $table->text('queue');
                $table->longText('payload');
                $table->longText('exception');
                $table->timestamp('failed_at')->useCurrent();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // If needed, you can define the rollback logic here
        Schema::dropIfExists('failed_jobs');
    }
}

