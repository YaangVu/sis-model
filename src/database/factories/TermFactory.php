<?php

namespace Database\Factories;

use App\Models\Term;
use Carbon\Carbon;
use Carbon\Traits\Creator;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class TermFactory extends Factory
{
    protected $model = Term::class;

    #[ArrayShape(['name' => "string", 'start_date' => "\DateTime", 'end_date' => "\DateTime", 'status' => "string", 'school_id' => "int"])]
    public function definition(): array
    {
        $start_date =  (new Carbon($this->faker->dateTime()));
        $end_date =  (new Carbon($start_date))->addYears($this->faker->numberBetween(1, 12));

        return [
            'name'       => $this->faker->name(),
            'start_date' => $start_date,
            'end_date'   => $end_date,
            'status'     => "Active",
            'school_id'  => $this->faker->numberBetween(1, 50),
        ];
    }
}
