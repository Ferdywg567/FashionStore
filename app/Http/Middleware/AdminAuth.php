<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuth
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
        if (!Auth::check()) {
            return redirect()->route('/login');
        }

        if (Auth::user()->role_id == 1) {
            return redirect()->route('admin-dashboard');
        }

        elseif (Auth::user()->role_id == 2) {
            return redirect()->route('admin-dashboard');
        }

        else {
            return redirect()->route('home');
        }

        return $next($request);
    }

}