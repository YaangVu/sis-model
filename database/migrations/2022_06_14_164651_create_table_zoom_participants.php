<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableZoomParticipants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zoom_participants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('zoom_meeting_id')->nullable(false);
            $table->unsignedBigInteger('user_id')->nullable(true);
            $table->string('user_join_meeting');
            $table->boolean('student_attendance');
            $table->string('type_guest');
            $table->unsignedBigInteger('class_id')->nullable(true);

            $table->foreign('zoom_meeting_id')->references('id')->on('zoom_meetings')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zoom_participants');
    }
}
