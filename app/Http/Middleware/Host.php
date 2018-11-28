<?php

namespace App\Http\Middleware;

use Closure;

class Host
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
        if (!auth()->check()) {
            return redirect('/login');
        }
        if (auth()->user()->role != 1) {
            return abort(403);
        }
        return $next($request);
    }
}
