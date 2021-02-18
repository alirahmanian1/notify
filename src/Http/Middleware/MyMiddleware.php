<?php


namespace Anisa\Notification\Http\Middleware;
use Closure;

class MyMiddleware
{

    public function __construct()
    {
        echo "middle";
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request,Closure $next,$var=null)
    {
        if ($var=="bb")
        {
            echo "<br> MyMiddleware";

        }
        else
        {
           return $next($request);
        }

    }
}
