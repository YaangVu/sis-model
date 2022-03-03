<?php

namespace YaangVu\SisModel\Database\Seeders;

use Illuminate\Database\Seeder;
use YaangVu\SisModel\App\Models\impl\ReportACTSQL;

class AddReportACT extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ReportACTSQL::factory()->count(1)->create();


    }
}
