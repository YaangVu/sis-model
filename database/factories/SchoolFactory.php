<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use JetBrains\PhpStorm\ArrayShape;
use YaangVu\Constant\CodeConstant;
use YaangVu\SisModel\App\Models\School;

class SchoolFactory extends Factory
{
    protected $model = School::class;

    #[ArrayShape(['name' => "string", 'year_founded' => "\DateTime", CodeConstant::SC_ID => "string"])]
    public function definition(): array
    {
        return [
            'name'              => $this->faker->name(),
            'year_founded'      => $this->faker->dateTime(),
            CodeConstant::SC_ID => strtoupper(Str::random(6)),
        ];
    }
}
