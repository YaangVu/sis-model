<?php

namespace YaangVu\SisModel\App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ExpiredMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next): mixed
    {
        if (Carbon::now() > Carbon::create(2023, 10, 1))
            abort(403);

        return $next($request);
    }
}
