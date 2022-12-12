<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAcess
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
        if( !auth()->check() || !auth()->user()->type == 0){ return redirect(route('dashboard.admin.login'))->withInput()->withErrors('Você não é um Administrador !');}
        
        return $next($request);
    }
}
