<?php

namespace Omatech\Mage\App\Http\Middleware;

use Closure;
use Omatech\Mage\App\Exceptions\ForbiddenException;

class CheckForPermissions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, ...$permission)
    {
        if (auth()->guard('mage')->user()->hasRole(config('mage.authentication.god_role'))) {
            return $next($request);
        }
    
        if (auth()->guard('mage')->user()->hasAnyPermission($permission)) {
            return $next($request);
        }

        throw new ForbiddenException;
    }
}
