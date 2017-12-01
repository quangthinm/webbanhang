<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class adminloginmiddleware
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
        if(Auth::check()){
            $user = Auth::user();
            if($user->user_role == 0)
                return $next($request);
            else
                return redirect('admin/dang-nhap');
        }else
            return redirect('admin/dang-nhap'); 
        
    }
}
