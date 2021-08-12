<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use YaangVu\Constant\AttendanceConstant;

class UpdateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('attendances', function (Blueprint $table) {
            $table->dropColumn('status');
        });

        Schema::table('attendances', function (Blueprint $table) {
            $table->unsignedBigInteger('class_id')->nullable()->change();
            $table->unsignedBigInteger('user_id')->nullable()->change();


            $table->enum('status', AttendanceConstant::ALL)
                  ->nullable()
                  ->default(AttendanceConstant::PRESENT);
            $table->enum('group', [AttendanceConstant::ATTEND, AttendanceConstant::ABSENCE])
                  ->nullable()
                  ->default(AttendanceConstant::ATTEND);

            $table->foreign('class_id')->references('id')->on('classes')->cascadeOnDelete();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendances', function (Blueprint $table) {
            $table->dropColumn('group');
            $table->dropColumn('status');
        });

        Schema::table('attendances', function (Blueprint $table) {
            $table->dropForeign('attendances_class_id_foreign');
            $table->dropForeign('attendances_user_id_foreign');

            $table->unsignedInteger('class_id')->change();
            $table->unsignedInteger('user_id')->nullable()->change();
            $table->string('status')->default(AttendanceConstant::PRESENT);
        });
    }
}
