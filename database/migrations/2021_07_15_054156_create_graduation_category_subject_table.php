<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use YaangVu\Constant\CodeConstant;

class CreateGraduationCategorySubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduation_category_subject', function (Blueprint $table) {
            $table->id();
            $table->string(CodeConstant::UUID)->unique()->nullable();
            $table->string(CodeConstant::EX_ID)->nullable();
            $table->unsignedBigInteger('graduation_category_id');
            $table->unsignedBigInteger('subject_id');

            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('graduation_category_id')->references('id')->on('graduation_categories')->cascadeOnDelete();
            $table->foreign('subject_id')->references('id')->on('subjects')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('graduation_category_subject');
    }
}
