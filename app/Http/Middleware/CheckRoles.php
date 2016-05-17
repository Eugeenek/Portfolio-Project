<?php
namespace App\Http\Middleware;

use Closure;

class CheckRoles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role = null)
    {
        if (!app('Illuminate\Contracts\Auth\Guard')->guest()) {
            //TO DO
            //Check if there is a role attache to the user
          
            if ($request->user()->is($role)) {
                
                return $next($request);
            }
        }

        return $request->ajax ? response('Unauthorized.', 401) : redirect('/login');
    }
}