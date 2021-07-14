<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use YaangVu\Constant\CodeConstant;

class CreateGradeLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade_letters', function (Blueprint $table) {
            $table->id();
            $table->string(CodeConstant::UUID)->nullable();
            $table->string(CodeConstant::EX_ID)->nullable();
            $table->string('letter', 2);
            $table->unsignedDouble('score', 3)->nullable()->default(0);
            $table->unsignedDouble('gpa', 3)->nullable()->default(0);
            $table->unsignedBigInteger('grade_scale_id')->nullable();
            $table->text('description')->nullable();

            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('grade_scale_id')->references('id')->on('grade_scales')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grade_letters');
    }
}
