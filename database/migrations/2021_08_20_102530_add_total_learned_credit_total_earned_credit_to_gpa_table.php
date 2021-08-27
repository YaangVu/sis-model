<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTotalLearnedCreditTotalEarnedCreditToGpaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gpa', function (Blueprint $table) {
            $table->unsignedFloat('total_learned_credit')->nullable()->after('earned_credit');
            $table->unsignedFloat('total_earned_credit')->nullable()->after('total_learned_credit');
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
            $table->dropColumn(['total_learned_credit', 'total_earned_credit']);
        });
    }
}
