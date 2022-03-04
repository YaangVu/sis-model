<?php
/**
 * @Author Dung
 * @Date   Mar 04, 2022
 */

namespace YaangVu\SisModel\Database\Seeders;

use Illuminate\Database\Seeder;
use YaangVu\SisModel\App\Models\impl\SbacNoSQL;

class SBACReportSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SbacNoSQL::factory()->count(1)->create();

    }
}