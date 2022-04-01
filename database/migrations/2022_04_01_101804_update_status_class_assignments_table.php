<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use YaangVu\Constant\StatusConstant;

class UpdateStatusClassAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('class_assignments', function (Blueprint $table) {
            $table->string('stats')->default(StatusConstant::ACTIVE);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('class_assignments', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
