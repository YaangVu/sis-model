<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use YaangVu\Constant\CodeConstant;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::connection('mongodb')->dropIfExists('schools');
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string(CodeConstant::UUID)->unique()->nullable();
            $table->string(CodeConstant::EX_ID)->nullable();
            $table->string('name');
            $table->dateTimeTz('year_founded')->nullable()->comment('Năm thành lập');
            $table->text('description')->nullable();

            $table->string('created_by')->nullable();
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
        // Schema::connection('mongodb')->dropIfExists('schools');
        Schema::dropIfExists('schools');
    }
}
