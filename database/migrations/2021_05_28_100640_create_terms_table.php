<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\StatusConstant;

class CreateTermsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terms', function (Blueprint $table) {
            $table->id();
            $table->string(CodeConstant::UUID)->nullable();
            $table->string(CodeConstant::EX_ID)->nullable();
            $table->string('name');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('description')->nullable();
            $table->enum('status', [
                StatusConstant::PENDING,
                StatusConstant::ON_GOING,
                StatusConstant::CONCLUDED
            ])->default(StatusConstant::ON_GOING)->nullable();
            $table->unsignedBigInteger('school_id')->nullable();
            $table->unsignedBigInteger('lms_id')->nullable();

            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('school_id')->references('id')->on('schools')->cascadeOnDelete();
            $table->foreign('lms_id')->references('id')->on('lms')->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('terms');
    }
}
