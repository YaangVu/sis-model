<?php

namespace YaangVu\SisModel\Database\Seeders;

use Faker\Provider\Uuid;
use Illuminate\Database\Seeder;
use YaangVu\Constant\CodeConstant;
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
        Lms::create(['name' => LmsSystemConstant::EDMENTUM, CodeConstant::LID => LmsSystemConstant::EDMENTUM . ' -' . Uuid::uuid()]);
        Lms::create(['name' => LmsSystemConstant::AGILIX, CodeConstant::LID => LmsSystemConstant::AGILIX . '-' . Uuid::uuid()]);
    }
}
