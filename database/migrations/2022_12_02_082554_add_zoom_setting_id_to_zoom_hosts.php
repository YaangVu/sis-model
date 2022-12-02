<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddZoomSettingIdToZoomHosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('zoom_hosts', function (Blueprint $table) {
            $table->unsignedBigInteger('zoom_setting_id')->nullable();
            $table->foreign('zoom_setting_id')->references('id')->on('zoom_settings')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('zoom_hosts', function (Blueprint $table) {
            $table->dropColumn('zoom_setting_id');
        });
    }
}
