<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhysicalPerformanceMeasuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physical_performance_measures', function (Blueprint $table) {
            $table->id();
            $table->string('student_code')->comment('uuid of student_code');
            $table->date('test_date');
            $table->float('benchpress_in_pounds')->nullable();
            $table->float('40_yard_dash_in_seconds')->nullable();
            $table->float('vertical_jump_in_inches')->nullable();
            $table->float('squat_in_pounds')->nullable();
            $table->float('height_in_inches')->nullable();
            $table->float('weight_in_pounds')->nullable();
            $table->foreign('student_code')->references('uuid')->on('users')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('physical_performance_measures');
    }
}
