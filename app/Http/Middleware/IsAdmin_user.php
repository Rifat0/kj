<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class IsAdmin_user
{
    public function handle($request, Closure $next)
    {
        if (Session::get('admin_user_data')[0] ['admin_user_id']){
            return $next($request);
        }
        return redirect('/admin');
        
    }
}
