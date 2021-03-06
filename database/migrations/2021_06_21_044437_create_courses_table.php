<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use YaangVu\Constant\CodeConstant;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string(CodeConstant::UUID)->nullable()->comment('course id');
            $table->string(CodeConstant::EX_ID)->nullable();
            $table->string('name');
            $table->unsignedBigInteger('lms_id')->nullable();
            $table->unsignedBigInteger('school_id')->nullable();
            $table->text('description')->nullable();
            $table->unsignedFloat('weight')->nullable();

            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

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
        Schema::dropIfExists('courses');
    }
}
