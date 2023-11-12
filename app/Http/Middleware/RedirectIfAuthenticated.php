<?php

namespace App\Http\Middleware;

use auth;
use Closure;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
  public function handle($request , Closure $next){
    if (auth('web')->check()) {
        return redirect(RouteServiceProvider::HOME);
        }
        if (auth('admin')->check()){
            return redirect(RouteServiceProvider::Admin);
            }
             return $next($request);
        }
    }
