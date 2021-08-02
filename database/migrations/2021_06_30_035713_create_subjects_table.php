<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\StatusConstant;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string(CodeConstant::UUID)->nullable()->comment('subject id');
            $table->string(CodeConstant::EX_ID)->nullable();
            $table->string('name');
            $table->unsignedDecimal('credit');
            $table->text('description')->nullable();
            $table->enum('status', [
                StatusConstant::INACTIVE,
                StatusConstant::ACTIVE,
                StatusConstant::ARCHIVED,
                StatusConstant::DELETED,
            ])->default(StatusConstant::ACTIVE)->nullable();
            $table->unsignedBigInteger('grade_id')->nullable();
            $table->unsignedBigInteger('school_id')->nullable();
            $table->unsignedBigInteger('weight')->default(1)->nullable();

            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('grade_id')->references('id')->on('grades')->cascadeOnDelete();
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
        Schema::dropIfExists('subjects');
    }
}
