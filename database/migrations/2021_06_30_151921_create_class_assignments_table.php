<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use YaangVu\Constant\ClassAssignmentConstant;
use YaangVu\Constant\CodeConstant;

class CreateClassAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_assignments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('class_id');
            $table->enum('assignment', [
                ClassAssignmentConstant::GUEST,
                ClassAssignmentConstant::STUDENT,
                ClassAssignmentConstant::PRIMARY_TEACHER,
                ClassAssignmentConstant::SECONDARY_TEACHER,
            ]);
            $table->string(CodeConstant::EX_ID)->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('class_id')->references('id')->on('classes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_assignments');
    }
}
