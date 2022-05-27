<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoreActivityLmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('score_activity_lms', function (Blueprint $table) {
            $table->id();
            $table->unsignedDouble('score', 3)->nullable()->default(0);
            $table->string('user_nosql_id')->nullable(true);
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->unsignedBigInteger('class_id')->nullable(false);
            $table->unsignedBigInteger('activity_class_lms_id')->nullable(true);
            $table->unsignedBigInteger('school_id');
            $table->unsignedBigInteger('created_by')->nullable(false);
            $table->string('uuid')->nullable(true);


            $table->foreign('school_id')->references('id')->on('schools')->cascadeOnDelete();
            $table->foreign('activity_class_lms_id')->references('id')->on('activity_class_lms')->cascadeOnDelete();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('created_by')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('class_id')->references('id')->on('classes')->cascadeOnDelete();
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
        Schema::dropIfExists('score_activity_lms');
    }
}
