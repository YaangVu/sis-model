<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('scores', function (Blueprint $table) {
            $table->string(\YaangVu\Constant\CodeConstant::SC_ID)->nullable();
            $table->unsignedBigInteger('lms_id')->nullable();
            $table->boolean('is_pass')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('scores', function (Blueprint $table) {
            $table->dropColumn(\YaangVu\Constant\CodeConstant::SC_ID);
            $table->dropColumn('lms_id');
            $table->dropColumn('is_pass');
        });
    }
}
