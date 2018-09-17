<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class IsVendore_user
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
        if (Session::get('vendore_user_data')[0] ['vendore_user_id']){
            return $next($request);
        }
        return redirect('/vendore');
    }
}
