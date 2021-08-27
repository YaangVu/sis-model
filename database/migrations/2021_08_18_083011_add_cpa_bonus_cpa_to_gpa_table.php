<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCpaBonusCpaToGpaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gpa', function (Blueprint $table) {
            $table->unsignedFloat('cpa')->nullable();
            $table->unsignedFloat('bonus_cpa')->nullable();
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
            $table->dropColumn(['cpa', 'bonus_cpa']);
        });
    }
}
