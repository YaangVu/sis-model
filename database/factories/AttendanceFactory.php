<?php

namespace YaangVu\SisModel\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;
use YaangVu\Constant\AttendanceConstant;
use YaangVu\SisModel\App\Constants\CalendarTypeConstant;
use YaangVu\SisModel\App\Models\impl\AttendanceSQL;
use YaangVu\SisModel\App\Models\impl\CalendarNoSQL;
use YaangVu\SisModel\App\Models\impl\ClassSQL;
use YaangVu\SisModel\App\Models\impl\UserSQL;

class AttendanceFactory extends Factory
{
    protected $model = AttendanceSQL::class;

    #[ArrayShape(['class_id' => "mixed", 'calendar_id' => "mixed", 'user_uuid' => "mixed", 'user_id' => "mixed", 'description' => "string", 'status' => "mixed", 'group' => "string", 'start' => "string", 'end' => "string"])]
    public function definition(): array
    {
        $calendarIds = CalendarNoSQL::whereType(CalendarTypeConstant::SCHEDULE)->pluck('_id');
        $classIds    = ClassSQL::all()->pluck('id');
        $users       = UserSQL::whereNotNull('uuid')->limit(5000)->get();
        $userIds     = $users->pluck('id');
        $userUuids   = $users->pluck('uuid');

        $status = $this->faker->randomElement(AttendanceConstant::ALL);

        return [
            'class_id'    => $this->faker->randomElement($classIds),
            'calendar_id' => $this->faker->randomElement($calendarIds),
            'user_uuid'   => $this->faker->randomElement($userUuids),
            'user_id'     => $this->faker->randomElement($userIds),
            'description' => $this->faker->text,
            'status'      => $status,
            'group'       => AttendanceConstant::GROUP_REVERSE[$status],
            'start'       => $this->faker->date,
            'end'         => $this->faker->date
        ];
    }
}
