<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityClassLmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('activity_class_lms', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->integer('max_point')->nullable(true);
            $table->unsignedBigInteger('class_id')->nullable(true);
            $table->unsignedBigInteger('class_activity_category_id')->nullable(false);
            $table->string('description')->nullable(true);
            $table->unsignedBigInteger('school_id');
            $table->string('uuid')->nullable(true);
            $table->unsignedBigInteger('created_by')->nullable(true);

            $table->foreign('school_id')->references('id')->on('schools')->cascadeOnDelete();
            $table->foreign('class_activity_category_id')->references('id')->on('class_activity_categories')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_class_lms');
    }
}
