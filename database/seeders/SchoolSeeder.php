<?php

namespace YaangVu\SisModel\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use MongoDB\BSON\UTCDateTime;
use YaangVu\Constant\SchoolConstant;
use YaangVu\SisModel\App\Models\impl\SchoolNoSQL;
use YaangVu\SisModel\App\Models\impl\SchoolSQL;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $school               = new SchoolSQL();
        $school->name         = SchoolConstant::DEFAULT_SCHOOL;
        $school->uuid         = SchoolConstant::DEFAULT_SCHOOL;
        $school->year_founded = Carbon::now();
        $school->save();

        $school               = new SchoolSQL();
        $school->name         = SchoolConstant::IGS;
        $school->uuid         = SchoolConstant::IGS;
        $school->year_founded = Carbon::now();
        $school->save();

        $school               = new SchoolNoSQL();
        $school->name         = SchoolConstant::DEFAULT_SCHOOL;
        $school->uuid         = SchoolConstant::DEFAULT_SCHOOL;
        $school->year_founded = new UTCDateTime(Carbon::now()->toDateTime());
        $school->save();

        $school               = new SchoolNoSQL();
        $school->name         = SchoolConstant::IGS;
        $school->uuid         = SchoolConstant::IGS;
        $school->year_founded = new UTCDateTime(Carbon::now()->toDateTime());
        $school->save();

        //SchoolFactory::times(50)->create();
    }
}
