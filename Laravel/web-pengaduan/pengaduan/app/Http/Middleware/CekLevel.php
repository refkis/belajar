<?php

namespace App\Http\Middleware;

use Closure;

class CekLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,...$levels)
    {
        if(in_array($request->user()->level,$levels)){
        return $next($request);
        }
        return redirect('/');
    }
    // Tunggal cek level
    // public function handle($request, Closure $next,$level)
    // {
    //     if($request->user()->role == $level){
    //     return $next($request);
    //     }
    //     return redirect('/');
    // }
}
