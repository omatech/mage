<?php

namespace Omatech\Mage\App\Http\Middleware;

use Closure;

class SetLocale
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
        $locale = null;

        foreach (config('mage.translations.available_locales') as $locale) {
            if ($locale['locale'] == session('locale')) {
                $locale = session('locale');
                break;
            }

            $locale = config('app.locale');
        }

        app()->setLocale($locale);

        return $next($request);
    }
}
