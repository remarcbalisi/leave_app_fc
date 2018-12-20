<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

class CheckUserStatus
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

        /**
         * active - 1
         * inactive - 2
         * suspended - 3
         */
        // print_r($request);
        // echo $request;

        if( User::where(['id'=>Auth::user()->id])->first()->user_status()->first()->status_id == 1 ){

            return $next($request);
        }


        Auth::logout();
        return redirect('login')->withErrors(['errors'=>'This Account is not yet Activated by the admin']);     
    }
}
