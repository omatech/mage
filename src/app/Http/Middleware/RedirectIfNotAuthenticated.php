<?php

namespace Omatech\Mage\App\Http\Middleware;

use Closure;
use Omatech\Mage\App\Exceptions\UnauthorizedException;

class RedirectIfNotAuthenticated
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
        if (auth()->guard('mage')->check() && !auth()->guard('mage')->user()->can(config('mage.authentication.mage_permission_access'))) {
            throw new UnauthorizedException(auth()->guard('mage')->user());
        }

        if (!auth()->guard('mage')->check()) {
            session(['previous' => request()->getUri()]);          
            return redirect(route('mage.auth.login'));
        }

        return $next($request);
    }
}
