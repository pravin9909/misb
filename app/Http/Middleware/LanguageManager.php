<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App;
use Illuminate\Support\Facades\Session;
class LanguageManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = Session::get('locale', 'en'); // Get the locale from session, default to English if not set
        App::setLocale($locale);
        // if(Session::get('locale'))
        // {
        //     App::setLocale(Session::get('locale'));
        // }
        return $next($request);
    }
}
