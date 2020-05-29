<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\App;
use Closure;

class Idiom
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
      $local= substr($request->server('HTTP_ACCEPT_LANGUAGE'),0,2);

      if($local!='en' && $local!='es'){
        $local='en';
      }
      if($local=='es'){
        $local='es';
      }

      App::setLocale($local);

        return $next($request);
    }


    
}
