<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use YaangVu\Constant\CodeConstant;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->string(CodeConstant::UUID)->unique()->nullable();
            $table->string(CodeConstant::EX_ID)->nullable();
            $table->unsignedDecimal('score');
            $table->unsignedBigInteger('class_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('grade_letter_id')->nullable();
            $table->unsignedBigInteger('lms_id')->nullable();
            $table->unsignedBigInteger('school_id')->nullable();
            $table->boolean('is_pass')->nullable();

            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('class_id')->references('id')->on('classes')->cascadeOnDelete();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('grade_letter_id')->references('id')->on('grade_letters')->cascadeOnDelete();
            $table->foreign('lms_id')->references('id')->on('lms')->cascadeOnDelete();
            $table->foreign('school_id')->references('id')->on('schools')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scores');
    }
}
