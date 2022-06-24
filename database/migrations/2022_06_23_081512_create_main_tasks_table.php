<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_tasks', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->integer('owner_id');
            $table->string('type')->nullable();
            $table->string('owner_id_no_sql')->nullable();
            $table->longText('short_description')->nullable();
            $table->integer('created_by')->nullable();
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
        Schema::dropIfExists('main_tasks');
    }
}
