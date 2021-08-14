<?php

namespace YaangVu\SisModel\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;
use YaangVu\SisModel\App\Models\impl\CpaSQL;
use YaangVu\SisModel\App\Models\impl\UserSQL;

class CpaFactory extends Factory
{
    protected $model = CpaSQL::class;

    #[ArrayShape(['uuid' => "string", 'user_id' => "int", 'school_id' => "int", 'learned_credit' => "int", 'earned_credit' => "int", 'cpa' => "float", 'bonus_cpa' => "float", 'rank' => "int"])]
    public function definition(): array
    {
        $users = UserSQL::all('id')->pluck('id')->toArray();

        return [
            'uuid'           => $this->faker->uuid,
            'user_id'        => $this->faker->randomElement($users),
            'school_id'      => 2,
            'learned_credit' => $this->faker->numberBetween(150, 200),
            'earned_credit'  => $this->faker->numberBetween(50, 200),
            'cpa'            => $this->faker->randomFloat(2, 0, 4),
            'bonus_cpa'      => $this->faker->randomFloat(2, 0, 1),
            'rank'           => $this->faker->numberBetween(1, 1000),
        ];
    }
}
