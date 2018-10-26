<?php

namespace App\Http\Middleware;

use App;
use Carbon\Carbon;
use Closure;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(session('appLocale')){
            $configLanguage = config('languages')[session('appLocale')];
            setlocale(LC_TIME, $configLanguage[1] . '.utf8');
            Carbon::setLocale(session('appLocale'));
            App::setLocale(session('appLocale'));
        } else {
            session()->put('appLocale', config('app.locale'));
            setlocale(LC_TIME, 'es_ES.utf8');
            Carbon::setLocale(session('appLocale'));
            App::setLocale(config('app.locale'));
        }
        return $next($request);
    }
}
