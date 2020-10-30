<?php

namespace ilhamdev\ipwhitelist\middleware;
use Closure;

class CheckIpMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!in_array($request->ip(), explode(',',env('APP_IP_WHITELIST')))) {
            return response('Access Denied',500);
        }

        return $next($request);
    }
}