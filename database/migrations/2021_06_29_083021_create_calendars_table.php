<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use YaangVu\SisModel\App\Constants\CalendarRepeatTypeConstant;
use YaangVu\SisModel\App\Constants\CalendarTypeConstant;

class CreateCalendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendars', function (Blueprint $table) {
            $table->id();
            $table->enum('type', [
                CalendarTypeConstant::EVENT,
                CalendarTypeConstant::ACTIVITY,
                CalendarTypeConstant::SCHEDULE,
                CalendarTypeConstant::HOLIDAY,
            ])->nullable()->comment('Type of calendar: event, holiday, class schedule, activity');
            $table->string('name')->nullable()->comment('event name');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('school_id')->nullable();
            $table->unsignedBigInteger('class_id')->nullable();
            $table->string('group')->nullable();
            $table->timestamp('start')->nullable();
            $table->timestamp('end')->nullable();
            $table->boolean('is_all_day')->nullable()->default(false);
            $table->enum('repeat', [
                CalendarRepeatTypeConstant::NONE,
                CalendarRepeatTypeConstant::DAILY,
                CalendarRepeatTypeConstant::WEEKLY,
                CalendarRepeatTypeConstant::MONTHLY,
                CalendarRepeatTypeConstant::ANNUAL,
            ])->nullable();
            $table->string('timezone')->nullable()->default('UTC');

            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            //$table->foreign('class_id')->references('id')->on('classes')->cascadeOnDelete();
            $table->foreign('school_id')->references('id')->on('schools')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calendars');
    }
}
