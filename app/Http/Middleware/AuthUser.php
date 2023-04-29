<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

//Import
use Illuminate\Support\Facades\Auth;

class AuthUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user()->utype === 'CST')
        {
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->utype == 'ADM') {
            return redirect('/admin/dashboard');
        }
        elseif(Auth::check() && Auth::user()->utype == 'SVP') {
            return redirect('/sprovider/dashboard');
        }
        else
        {
            session()->flush();
            return redirect()->route('login');
        }
    }
}
