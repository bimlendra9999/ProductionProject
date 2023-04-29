<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

//Import
use Illuminate\Support\Facades\Auth;

class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user()->utype === 'ADM')
        {
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->utype == 'SVP') {
            return redirect('/sprovider/dashboard');
        }
        elseif(Auth::check() && Auth::user()->utype == 'CST') {
            return redirect('/');
        }
        else
        {
            session()->flush();
            return redirect()->route('login');
        }
    }
}
