<?php

namespace YaangVu\SisModel\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use YaangVu\SisModel\App\Models\impl\ActNoSQL;


class ACTFactory extends Factory

{
    protected $model = ActNoSQL::class;

    public function definition(): array
    {


        return [
            'student_code'        => "3dbb81e9-fc5a-3983-8860-43682151720c",
            'test_date'           => $this->faker->date(),
            'act_composite_score' => $this->faker->randomNumber(1, 9),
            'act_math_score'      => $this->faker->randomNumber(1, 9),
            'act_science_score'   => $this->faker->randomNumber(1, 9),
            'act_english_score'   => $this->faker->randomNumber(1, 9),
            'act_reading_score'   => $this->faker->randomNumber(1, 9),


        ];
    }
}
