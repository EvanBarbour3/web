<?php

namespace App\Http\Middleware;

use Closure;

/**
 * Secure Https
 *
 * @author EB
 * @package App\Http\Middleware
 */
class SecureHttps
{
    /**
     * @author EB
     * @param $request
     * @param Closure $next
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        if (!$request->secure() && env('APP_ENV') === 'live') {
            return redirect()->secure($request->getRequestUri());
        }
        return $next($request);
    }
}