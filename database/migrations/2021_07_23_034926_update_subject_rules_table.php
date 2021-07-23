<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSubjectRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subject_rules', function (Blueprint $table) {
            $table->string('group')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subject_rules', function (Blueprint $table) {
            $table->dropColumn('group');
        });

        Schema::table('subject_rules', function (Blueprint $table) {
            $table->unsignedBigInteger('group')->nullable()->comment('group of rules');
        });
    }
}
