<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersNoSqlTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //        Schema::connection('mongodb')->dropIfExists('users');
        //        Schema::connection('mongodb')->create('users', function (Blueprint $table) {
        //            $table->id();
        //
        //            $table->unsignedBigInteger('created_by')->nullable();
        //            $table->timestamps();
        //            $table->softDeletes();
        //        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //        Schema::connection('mongodb')->dropIfExists('users');
    }
}
