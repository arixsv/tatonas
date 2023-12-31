<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $userRole)
    {
        if (auth()->user()->role == $userRole) {
            return $next($request);
        }

        return response()->json(['Tidak memiliki hak akses.']);
    }
}
