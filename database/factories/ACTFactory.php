<?php

namespace YaangVu\SisModel\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use YaangVu\SisModel\App\Models\impl\ReportACTSQL;


class ACTFactory extends Factory

{
    protected $model = ReportACTSQL::class;

    public function definition(): array
    {

        $student_code = [
            "e63e8f1f-2f8c-4c6b-a5d3-f0b80df50c31",
            "bd0a4832-9421-4dee-907a-910d316504e7",
            "84fcf95f-36a9-4bed-ab08-b79f9f3add56",
            "242e731b-0f44-414c-9ccb-416e8bb9a799",
            "1633b54a-6a90-4f3f-b9ad-9df2b1b7da41",
            "7e8edf8d-5c08-4422-83de-edd260ab1b88",
            "d0e489fe-9628-4e7a-9ecc-2362dd57efbe"
        ];

        return [
            'student_code'        => "84fcf95f-36a9-4bed-ab08-b79f9f3add56",
            'test_date'           => $this->faker->date(),
            'act_composite_score' => $this->faker->randomNumber(1, 9),
            'act_math_score'      => $this->faker->randomNumber(1, 9),
            'act_science_score'   => $this->faker->randomNumber(1, 9),
            'act_english_score'   => $this->faker->randomNumber(1, 9),
            'act_reading_score'   => $this->faker->randomNumber(1, 9),


        ];
    }
}
