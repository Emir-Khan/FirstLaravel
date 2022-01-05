<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BadWord
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
        $badWords=["elma","armut","çilek"];
        if (in_array($request->password,$badWords)) {
            $badWord=strlen($request->password);
            $sansur="";
            for ($i=0; $i < $badWord; $i++) { 
                $sansur=$sansur."*";
            }
            $request->merge([
                "password"=>$sansur,
                "password_confirmation"=>$sansur,
            ]);
        }


        return $next($request);
    }
}
