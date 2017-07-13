<?php

namespace App\Http\Middleware;

use Closure;

class LogMiddleware
{
    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $route = $request->route();
        
        print_r($route[1]['uses']);
        echo "<br>";

        return $next($request);
    }

}
