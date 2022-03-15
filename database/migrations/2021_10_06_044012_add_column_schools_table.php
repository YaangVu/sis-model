<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('schools', function (Blueprint $table) {
            $table->string('address')->after('created_by')->nullable();
            $table->string('fax')->nullable();
            $table->string('principal')->nullable();
            $table->string('phone')->nullable();
            $table->string('timezone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('schools', function (Blueprint $table) {
            $table->dropColumn('address');
            $table->dropColumn('fax');
            $table->dropColumn('phone');
            $table->dropColumn('principal');
            $table->dropColumn('timezone');
        });
    }
}
