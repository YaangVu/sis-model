<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportActTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_act', function (Blueprint $table) {
            $table->id();
            $table->string('student_code');
            $table->date('test_date');
            $table->float('act_composite_score');
            $table->float('act_math_score');
            $table->float('act_science_score');
            $table->float('act_english_score');
            $table->float('act_reading_score');

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
        Schema::dropIfExists('report_act');
    }
}
