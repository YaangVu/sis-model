<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('assignee')->comment('uuid of assignee');
            $table->text('summary');
            $table->text('description')->nullable();
            $table->text('tags')->nullable();
            $table->timestamp('due_date')->nullable();

            $table->foreign('assignee')->references('uuid')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issues');
    }
}
