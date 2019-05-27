<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $rolesallowed)
    {
        if ($request->user() === null){
            //{{__('auth.no-permissions')}}
            return response('no cuenta con permisos ',401);
        }
        $actions = $request->route()->getAction();
        
        $roles=explode('|', $rolesallowed);
        
        if ($request->user()->hasAnyRole($roles)){

            return $next($request);    
        }
        return response('no cuenta con los permisos necesarios',401);
    }
}
