<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_tasks', function (Blueprint $table) {
            $table->id();
            $table->string('task_name');
            $table->string('type')->nullable();
            $table->dateTime('deadline');
            $table->integer('assignee_id');
            $table->integer('reviewer_id')->nullable();
            $table->integer('created_by')->nullable();
            $table->longText('description')->nullable();
            $table->integer('owner_id')->nullable();
            $table->string('owner_id_no_sql')->nullable();
            $table->integer('main_task_id')->unsigned();
            $table->foreign('main_task_id')->references('id')->on('main_tasks')->onDelete('cascade');
            $table->integer('task_status_id')->unsigned();
            $table->foreign('task_status_id')->references('id')->on('task_status')->onDelete('cascade');
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
        Schema::dropIfExists('sub_tasks');
    }
}
