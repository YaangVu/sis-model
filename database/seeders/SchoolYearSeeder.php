<?php

namespace YaangVu\SisModel\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use YaangVu\SisModel\App\Models\impl\SchoolYearNoSQL;

class SchoolYearSeeder extends Seeder
{
    public function run()
    {
        $data = [];
        for($i = 1; $i <= 4; $i++){
            $data [] = [
                'school_year'=> ((int) date("Y") + $i - 1). '-' .(int) date("Y") + $i,
                'created_at' => Carbon::now()->toDateTimeString(),
            ];
        }

        SchoolYearNoSQL::query()->insert($data);
    }
}
