<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreColumnForScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table('scores', function (Blueprint $table) {
            $table->dropColumn('grade');
            $table->boolean('is_calculate_gpa')->nullable()
                  ->comment('Use to calculate GPA, link from grade_scales table');
            $table->float('raw_grade_point')->nullable()->comment('Value to calculate GPA');
            $table->float('final_grade_point')->nullable()->comment('Value after plus extra point to calculate GPA');
            $table->float('extra_point')->nullable()->comment('Extra point if subject type is Honor or Advanced');
            $table->dropForeign('scores_grade_letter_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('scores', function (Blueprint $table) {
            $table->string('grade')->nullable();
            $table->foreign('grade_letter_id')->references('id')->on('grade_letters')->cascadeOnDelete();
            $table->dropColumn('is_calculate_gpa');
            $table->dropColumn('raw_grade_point');
            $table->dropColumn('final_grade_point');
            $table->dropColumn('extra_point');
        });
    }
}
