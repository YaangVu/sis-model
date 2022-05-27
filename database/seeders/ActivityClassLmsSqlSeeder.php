<?php
/**
 * @Author kyhoang
 * @Date   May 27, 2022
 */

namespace YaangVu\SisModel\Database\Seeders;

use YaangVu\SisModel\App\Models\impl\ActNoSQL;

class ActivityClassLmsSqlSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ActNoSQL::factory()->count(1)->create();
    }
}