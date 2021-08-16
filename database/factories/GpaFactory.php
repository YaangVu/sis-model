<?php

namespace YaangVu\SisModel\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;
use YaangVu\SisModel\App\Models\impl\GpaSQL;
use YaangVu\SisModel\App\Models\impl\GradeSQL;
use YaangVu\SisModel\App\Models\impl\TermSQL;
use YaangVu\SisModel\App\Models\impl\UserSQL;

class GpaFactory extends Factory
{
    protected $model = GpaSQL::class;

    #[ArrayShape(['uuid'           => "string", 'user_id' => "int", 'term_id' => "int", 'school_id' => "int",
                  'learned_credit' => "int", 'earned_credit' => "int", 'gpa' => "float",
                  'bonus_gpa'      => "float", 'rank' => "int", 'grade_id' => "int"])]
    public function definition(): array
    {
        $users  = UserSQL::all('id')->pluck('id')->toArray();
        $terms  = TermSQL::all()->pluck('id')->toArray();
        $grades = GradeSQL::all()->pluck('id')->toArray();

        return [
            'uuid'           => $this->faker->uuid,
            'user_id'        => $this->faker->randomElement($users),
            'term_id'        => $this->faker->randomElement($terms),
            'grade_id'       => $this->faker->randomElement($grades),
            'school_id'      => 2,
            'learned_credit' => $this->faker->numberBetween(150, 200),
            'earned_credit'  => $this->faker->numberBetween(50, 200),
            'gpa'            => $this->faker->randomFloat(2, 0, 4),
            'bonus_gpa'      => $this->faker->randomFloat(2, 0, 1),
            'rank'           => $this->faker->numberBetween(1, 1000),
        ];
    }
}
