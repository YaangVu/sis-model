<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGpaUnweightedToGpaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gpa', function (Blueprint $table) {
            $table->unsignedFloat('gpa_unweighted')->nullable();
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
            $table->dropColumn('gpa_unweighted');
        });
    }
}
