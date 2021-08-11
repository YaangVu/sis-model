<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateExtraPointGradeScaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('grade_scales', function (Blueprint $table) {
            $table->unsignedDouble('extra_point_honor')->nullable()->comment('Extra points for honor class');
            $table->unsignedDouble('extra_point_advanced')->nullable()->comment('Extra points for advanced class');
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
            $table->dropColumn('extra_point_honor');
            $table->dropColumn('extra_point_advanced');
        });
    }
}
