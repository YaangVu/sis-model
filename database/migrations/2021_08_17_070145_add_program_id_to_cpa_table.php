<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProgramIdToCpaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cpa', function (Blueprint $table) {
            $table->unsignedBigInteger('program_id')->nullable();

            $table->foreign('program_id')->references('id')->on('programs')->cascadeOnDelete();
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
            if (Schema::hasColumn('cpa', 'program_id'))
                $table->dropColumn('program_id');
        });
    }
}
