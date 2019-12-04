<?php

namespace App\Http\Middleware;

use Closure;

class AuthKey
{
    public function handle($request, Closure $next)
    {
        $token = $request->header('APP_KEY');
        if($token != 'ABC'){
            return response()->json(['Message' => 'Key Not Found'],401);
        }
        return $next($request);
    }
}
