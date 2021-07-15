<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\SubjectRuleConstant;

class CreateSubjectRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_rules', function (Blueprint $table) {
            $table->id();
            $table->string(CodeConstant::UUID)->nullable()->comment('subject id');
            $table->string(CodeConstant::EX_ID)->nullable();
            $table->enum('type', [
                SubjectRuleConstant::BEFORE,
                SubjectRuleConstant::AFTER,
                SubjectRuleConstant::PRECEDE,
                SubjectRuleConstant::FOLLOW,
                SubjectRuleConstant::CONSECUTIVE,
                SubjectRuleConstant::SAME_TEACHER,
                SubjectRuleConstant::DIFFERENT_TEACHER,
                SubjectRuleConstant::SAME_PERIOD,
                SubjectRuleConstant::DIFFERENT_PERIOD,
                SubjectRuleConstant::SAME_TERM,
                SubjectRuleConstant::DIFFERENT_TERM,
            ])->nullable();
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('relevance_subject_id')->nullable();
            $table->unsignedBigInteger('group')->comment('group of rules');

            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('subject_id')->references('id')->on('subjects')->cascadeOnDelete();
            $table->foreign('relevance_subject_id')->references('id')->on('subjects')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subject_rules');
    }
}
