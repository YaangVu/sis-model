<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateClassActivityCategoriesTableForLms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('class_activity_categories', function (Blueprint $table) {
            $table->boolean('is_default')->default(false)->nullable();
            $table->double('max_point')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('class_activity_categories', function (Blueprint $table) {
            $table->dropColumn('is_default');
            $table->dropColumn('max_point');
        });
    }
}
