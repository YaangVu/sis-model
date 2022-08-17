<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLastMessageAtAndLastMessage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chat_rooms', function (Blueprint $table) {
            $table->text('last_message')->nullable();
            $table->dateTime('last_message_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chat_rooms', function (Blueprint $table) {
            $table->dropColumn('last_message');
            $table->dropColumn('last_message_at');
        });
    }
}
