<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUnreadNumberToUserChatRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_chat_rooms', function (Blueprint $table) {
            $table->unsignedBigInteger('unread')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_chat_rooms', function (Blueprint $table) {
            $table->dropColumn('unread');
        });
    }
}
