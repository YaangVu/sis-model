<?php

use App\Constants\ImportActionConstant;
use App\Constants\ImportStatusConstant;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imports', function (Blueprint $table) {
            $table->id();
            $table->text('url')->nullable();
            $table->enum('status', [
                ImportStatusConstant::PENDING,
                ImportStatusConstant::IMPORTING,
                ImportStatusConstant::IMPORTED,
                ImportStatusConstant::REJECT
            ])->nullable()->default(ImportStatusConstant::PENDING);
            $table->enum('action', [
                ImportActionConstant::USER,
                ImportActionConstant::STAFF,
                ImportActionConstant::STUDENT,
            ])->nullable();
            $table->string('created_by')->nullable();
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
        Schema::dropIfExists('imports');
    }
}
