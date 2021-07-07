<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use YaangVu\Constant\CodeConstant;

class UpdateGradeScaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('grade_scales', function (Blueprint $table) {
            $table->string(CodeConstant::SC_ID)->nullable();
            $table->unsignedBigInteger('lms_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('grade_scales', function (Blueprint $table) {
            $table->dropColumn(\YaangVu\Constant\CodeConstant::SC_ID);
            $table->dropColumn('lms_id');
        });
    }
}
