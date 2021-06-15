<?php

namespace YaangVu\SisModel\App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;
use YaangVu\Exceptions\BadRequestException;
use YaangVu\SisModel\App\Models\School;

class SchoolMiddleware
{
    use HasRoles;

    public static ?School $currentSchool = null;

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        $scId = $request->header('X-sc-id') ?? null;
        if (!$scId)
            throw new BadRequestException(['message' => __("validation.required", ['attribute' => "X-sc-id"])],
                                          new Exception);

        $school = School::whereScId($scId)->first();
        if (!$school)
            throw new BadRequestException(['message' => __("validation.exists", ['attribute' => "X-sc-id"])],
                                          new Exception);

        self::$currentSchool = $school;

        return $next($request);
    }

    /**
     * @param School $school
     *
     * @return $this
     */
    public function setCurrentSchool(School $school): static
    {
        self::$currentSchool = $school;

        return $this;
    }
}
