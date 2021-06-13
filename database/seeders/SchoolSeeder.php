<?php

namespace YaangVu\SisModel\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use YaangVu\Constant\SchoolConstant;
use YaangVu\SisModel\App\Models\School;
use YaangVu\SisModel\Database\Factories\SchoolFactory;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $school               = new School();
        $school->name         = SchoolConstant::DEFAULT_SCHOOL;
        $school->year_founded = Carbon::now();
        $school->sc_id        = SchoolConstant::DEFAULT_SCHOOL;
        $school->save();

        $school               = new School();
        $school->name         = SchoolConstant::IVG;
        $school->year_founded = Carbon::now();
        $school->sc_id        = SchoolConstant::IVG;
        $school->save();

        SchoolFactory::times(50)->create();
    }
}
