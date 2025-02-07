<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->user()){
            if($request->user()->role ==='admin'){
                return $next($request);
            }
            else{
                return response()->json(['error' => 'Forbidden'], 403);
            }
            return redirect()->route('login');
        }
    } 
}
