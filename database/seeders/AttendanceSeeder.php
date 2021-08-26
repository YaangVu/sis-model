<?php

namespace YaangVu\SisModel\Database\Seeders;

use Illuminate\Database\Seeder;
use YaangVu\SisModel\App\Models\impl\AttendanceSQL;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AttendanceSQL::factory()->count(2000)->create();
    }
}
