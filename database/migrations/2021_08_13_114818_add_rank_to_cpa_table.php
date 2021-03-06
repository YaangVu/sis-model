<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRankToCpaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cpa', function (Blueprint $table) {
            $table->unsignedBigInteger('rank')->nullable();
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
            if (Schema::hasColumn('cpa', 'rank'))
                $table->dropColumn(['rank']);
        });
    }
}
