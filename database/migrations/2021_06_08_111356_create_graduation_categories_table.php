<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\StatusConstant;

class CreateGraduationCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduation_categories', function (Blueprint $table) {
            $table->id();
            $table->string(CodeConstant::UUID)->nullable();
            $table->string(CodeConstant::EX_ID)->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->enum('status', [StatusConstant::ACTIVE, StatusConstant::INACTIVE])->nullable();

            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('graduation_categories');
    }
}
