<?php

namespace Omatech\Mage\App\Http\Middleware;

use Closure;

class RedirectIfAuthenticated
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
        if (auth()->guard('mage')->check()) {
            return redirect(route(config('mage.on_login_to_route')));
        }

        return $next($request);
    }
}
