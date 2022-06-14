<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableZoomMeetings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zoom_meetings', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable(true);
            $table->string('title')->nullable(true);
            $table->string('description')->nullable(true);
            $table->string('password');
            $table->string('zoom_meeting_type');
            $table->integer('duration');
            $table->string('timezone')->nullable(true);
            $table->integer('notification_before')->nullable(true);
            $table->boolean('join_before_host');
            $table->string('participant_join_before_host')->nullable(true);
            $table->string('type_guest');
            $table->string('link_zoom')->nullable(true);
            $table->unsignedBigInteger('created_by')->nullable(false);

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
        Schema::dropIfExists('zoom_meetings');
    }
}
