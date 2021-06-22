<?php

namespace YaangVu\SisModel\Database\Seeders;

use Illuminate\Database\Seeder;
use YaangVu\Constant\LmsSystemConstant;
use YaangVu\SisModel\App\Models\Lms;

class LmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lms::create(['name' => LmsSystemConstant::EDMENTUM,]);
        Lms::create(['name' => LmsSystemConstant::AGILIX,]);
    }
}
