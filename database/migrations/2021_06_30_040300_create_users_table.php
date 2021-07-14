<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use YaangVu\Constant\CodeConstant;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql')->create('users', function (Blueprint $table) {
            $table->id();
            $table->string(CodeConstant::UUID)->nullable();
            $table->string(CodeConstant::EX_ID)->nullable();
            $table->string('username')->unique()->nullable(false);

            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql')->dropIfExists('users');
    }
}
