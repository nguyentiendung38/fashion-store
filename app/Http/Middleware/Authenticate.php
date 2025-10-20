<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    public function handle(Request $request, Closure $next, ...$guards)
    {
        if (Auth::guard($guards)->guest()) {
            return $this->redirectTo($request);
        }

        return $next($request);
    }

    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            if (str_starts_with($request->path(), 'admin/collections')) {
                return null; // Allow access to collections routes
            }
            return route('login');
        }
    }
}