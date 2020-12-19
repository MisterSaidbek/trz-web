<?php
namespace App\Http\Middleware;

use Closure;

class Localization{

    public function handle($request, Closure $next)
    {
        if (\Session::has('locale')){
            \App::setLocale(\Session::get('locale'));
        }
        return $next($request);
    }

}