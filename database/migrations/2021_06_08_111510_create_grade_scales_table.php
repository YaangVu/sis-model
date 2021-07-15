<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use YaangVu\Constant\CodeConstant;

class CreateGradeScalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade_scales', function (Blueprint $table) {
            $table->id();
            $table->string(CodeConstant::UUID)->unique()->nullable();
            $table->string(CodeConstant::EX_ID)->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedDouble('score_to_pass', 3)->nullable()->default(0);
            $table->boolean('is_calculate_gpa')->default(false);
            // $table->unsignedBigInteger('lms_id')->nullable();
            $table->unsignedBigInteger('school_id')->nullable();

            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('school_id')->references('id')->on('schools')->cascadeOnDelete();
            // $table->foreign('lms_id')->references('id')->on('lms')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grade_scales');
    }
}
