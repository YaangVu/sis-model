<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnnameToTaskCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('task_comments', function (Blueprint $table) {
            $table->unsignedBigInteger('main_task_id')->unsigned()->nullable();
            $table->foreign('main_task_id')->references('id')->on('main_tasks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('task_comments', function (Blueprint $table) {
            $table->dropColumn('main_task_id');
        });
    }
}
