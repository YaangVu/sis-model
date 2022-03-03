<?php
/**
 * @Author Dung
 * @Date   Mar 03, 2022
 */

namespace YaangVu\SisModel\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use YaangVu\SisModel\App\Models\impl\SBACReportNoSQL;

class SBACFactory extends Factory
{
    protected $model = SBACReportNoSQL::class;

    public function definition()
    {
        return [
            'student_code'                              => "1266c798-347d-3e43-b9e4-cd05abaa14cb",
            'grade'                                     => $this->faker->randomNumber(1, 9),
            'assessment_name'                           => $this->faker->name(),
            'score_result'                              => $this->faker->randomNumber(1, 9),
            'achievement_level'                         => $this->faker->name(),
            'assessment_family_achievement_level'       => $this->faker->name(),
            'assessment_school_year'                    => $this->faker->name(),
            'assessment_name(state_assessment_subtest)' => $this->faker->date()


        ];
    }
}