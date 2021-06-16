<?php

namespace YaangVu\SisModel\App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;
use YaangVu\Exceptions\BadRequestException;
use YaangVu\SisModel\App\Models\School;

class SchoolMiddleware
{
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

        return $next($request);
    }
}
