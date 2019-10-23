<?php

namespace Omatech\Mage\App\Http\Middleware;

use Closure;

class SidebarToggle
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $cookie =  $request->cookies->get('sidebar');
        session(['sidebar' => $cookie]);

        return $next($request);
    }
}
