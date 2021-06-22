<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\StatusConstant;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->enum('status', [
                StatusConstant::PENDING,
                StatusConstant::ON_GOING,
                StatusConstant::CONCLUDED
            ])->nullable();
            $table->string(CodeConstant::EX_ID)->nullable();
            $table->unsignedDouble('credit')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('grade_scale_id')->nullable();
            $table->unsignedBigInteger('graduation_category_id')->nullable();
            $table->unsignedBigInteger('term_id')->nullable();
            $table->unsignedBigInteger('course_id')->nullable();
            $table->unsignedBigInteger('lms_id')->nullable();

            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('grade_scale_id')->references('id')->on('grade_scales');
            $table->foreign('graduation_category_id')->references('id')->on('graduation_categories');
            $table->foreign('term_id')->references('id')->on('terms');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('lms_id')->references('id')->on('lms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
