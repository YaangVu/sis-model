<?php

namespace Database\Seeders;

use App\Models\School;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

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
        $school->name         = 'default';
        $school->year_founded = Carbon::now();
        $school->sc_id        = 'default';
        $school->created_by   = 1;
        $school->save();
        School::factory()->times(50)->create();
    }
}
