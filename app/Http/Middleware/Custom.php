<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use App\Http\Controllers\authController;
use Illuminate\Auth\Events\Authenticated;
use Illuminate\Support\Facades\Auth;

class Custom
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
        if ($request){

//            (new authController())->userLogin($request);

            $credentials = $request->only('email','password');
            if(Auth::attempt($credentials)){

                $role=User::where('email',$request->get('email'))->first()->role;
                if ($role=='user'){
                    return redirect('/');
                }
                else{
                    return redirect('/backend');
                }
            }
        }
        return $next($request);
    }
}
