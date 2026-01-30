<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class SetLocale
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Get locale from cookie, default to 'ku' (Kurdish)
        $locale = $request->cookie('locale', 'ku');
        
        if (in_array($locale, ['ku', 'en', 'ar'])) {
            App::setLocale($locale);
        }
        
        return $next($request);
    }
}
