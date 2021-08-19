<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGradeToGpaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gpa', function (Blueprint $table) {
            $table->unsignedBigInteger('grade_id')->nullable()->comment('grade of student, such as: K-12');

            $table->foreign('grade_id')->references('id')->on('grades')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gpa', function (Blueprint $table) {
            $table->dropColumn('grade_id');
        });
    }
}
