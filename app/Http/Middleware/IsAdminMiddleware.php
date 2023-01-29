<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdminMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        if (!$request->headers->get('apiKey')){
            return response()->json(["You are unauthorized, begone!"],401);
        }

        if ($request->headers->get('apiKey') !== 'dummyKey'){
            return response()->json(["Your secret key is wrong, recede immidiately"],401);
        }

        return $next($request);
    }
}
