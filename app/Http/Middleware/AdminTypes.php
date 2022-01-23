<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminTypes
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $types)
    {
        $types = explode('|', $types);

        if (in_array(auth()->user()->type, $types)) {

            return $next($request);
        }

        return abort(403);
    }
}
