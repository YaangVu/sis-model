<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTermIdToCpaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cpa', function (Blueprint $table) {
            $table->unsignedBigInteger('grade_id')->nullable()->comment('grade of student, such as: K-12');
            $table->unsignedBigInteger('term_id');

            $table->foreign('grade_id')->references('id')->on('grades')->cascadeOnDelete();
            $table->foreign('term_id')->references('id')->on('terms')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cpa', function (Blueprint $table) {
            $table->dropColumn(['grade_id', 'term_id']);
        });
    }
}
