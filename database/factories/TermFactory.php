<?php

namespace YaangVu\SisModel\Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;
use YaangVu\Constant\StatusConstant;
use YaangVu\SisModel\App\Models\Term;

class TermFactory extends Factory
{
    protected $model = Term::class;

    #[ArrayShape(['name' => "string", 'start_date' => "\DateTime", 'end_date' => "\DateTime", 'status' => "string", 'school_id' => "int"])]
    public function definition(): array
    {
        $start_date = (new Carbon($this->faker->dateTime()));
        $end_date   = (new Carbon($start_date))->addYears($this->faker->numberBetween(1, 12));

        return [
            'name'       => $this->faker->name(),
            'start_date' => $start_date,
            'end_date'   => $end_date,
            'status'     => StatusConstant::ON_GOING,
            'school_id'  => $this->faker->numberBetween(1, 50),
        ];
    }
}
