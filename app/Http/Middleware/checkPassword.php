<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckPassword
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if ($request->header('ApiPassword') !== 'Kmb0BYs5eVLIV6wbNqFRUrLqEy8ZnxP5GwbKVhas1y0=') {
            return response()->json(['message' => 'Unauthenticated.']);
        }
        return $next($request);
    }
}
