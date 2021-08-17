<?php

namespace YaangVu\SisModel\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use YaangVu\SisModel\App\Models\impl\CalendarSQL;

class CalendarFactory extends Factory
{
    protected $model = CalendarSQL::class;

    public function definition(): array
    {
    	return [
    	    //
    	];
    }
}
