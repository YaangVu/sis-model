<?php

namespace YaangVu\SisModel\Database\Seeders;

use Faker\Provider\Uuid;
use Illuminate\Database\Seeder;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\LmsSystemConstant;
use YaangVu\SisModel\App\Models\impl\LmsSQL;

class LmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LmsSQL::create(['name' => LmsSystemConstant::EDMENTUM, CodeConstant::UUID => LmsSystemConstant::EDMENTUM . '-' . Uuid::uuid()]);
        LmsSQL::create(['name' => LmsSystemConstant::AGILIX, CodeConstant::UUID => LmsSystemConstant::AGILIX . '-' . Uuid::uuid()]);
        LmsSQL::create(['name' => LmsSystemConstant::SIS, CodeConstant::UUID => LmsSystemConstant::SIS]);
    }
}
