<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmsParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms_participants', function (Blueprint $table) {
            $table->id();
            $table->string('user_uuid')->nullable();
            $table->string('user_id')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('status')->nullable();
            $table->string('template_id')->nullable();
            $table->string('external_id')->nullable();
            $table->string('created_by')->nullable();
            $table->unsignedBigInteger('provider_id')->nullable();
            $table->foreign('user_id')->references('uuid')->on('users')->onDelete('cascade');
            $table->foreign('provider_id')->references('id')->on('sms_settings')->onDelete('cascade');
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
        Schema::dropIfExists('sms_participants');
    }
}
