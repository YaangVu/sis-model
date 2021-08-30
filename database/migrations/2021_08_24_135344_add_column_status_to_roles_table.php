<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use YaangVu\Constant\StatusConstant;

class AddColumnStatusToRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('roles', function (Blueprint $table) {
            $table->enum('status', [StatusConstant::ACTIVE, StatusConstant::INACTIVE])->default(StatusConstant::ACTIVE);
            $table->text('description')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('roles', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('description');
            $table->dropColumn('created_by');
        });
    }
}
