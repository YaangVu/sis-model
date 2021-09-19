<?php

namespace YaangVu\SisModel\App\Providers;

use Illuminate\Support\ServiceProvider;
use YaangVu\SisModel\App\Models\impl\SchoolSQL;

class SchoolServiceProvider extends ServiceProvider
{
    public static ?SchoolSQL $currentSchool = null;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $uuid = request()->header('X-school-uuid');
        if ($uuid) {
            $school = SchoolSQL::with('schoolNoSql')->whereUuid($uuid)->first();
            $this->setCurrentSchool($school);
        } else {
            $this->setCurrentSchool(null);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * @param SchoolSQL|null $school
     *
     * @return $this
     */
    public function setCurrentSchool(SchoolSQL $school = null): static
    {
        self::$currentSchool = $school;

        return $this;
    }
}
