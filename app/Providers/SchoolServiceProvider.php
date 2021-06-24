<?php

namespace YaangVu\SisModel\App\Providers;

use Illuminate\Support\ServiceProvider;
use YaangVu\SisModel\App\Models\impl\SchoolSQL;
use YaangVu\SisModel\App\Models\School;

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
        $scId = request()->header('X-sc-id');
        if ($scId) {
            $school = SchoolSQL::whereScId($scId)->first();
            $this->setCurrentSchool($school);
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
     * @param School $school
     *
     * @return $this
     */
    public function setCurrentSchool(SchoolSQL $school): static
    {
        self::$currentSchool = $school;

        return $this;
    }
}
