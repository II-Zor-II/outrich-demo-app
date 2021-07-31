<?php

namespace App\Http\Middleware;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle($request, \Closure $next)
    {
        if (!$request->expectsJson()) {
            return redirect('/error');
        }
        return $next($request);
    }
}
