<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;
        $email = $request->email;
        $role = DB::table('users')->where('email', $email)->value('role');
        $pass = DB::table('users')->where('email', $email)->value('password');
        $name = DB::table('users')->where('email', $email)->value('name');
        $img = DB::table('users')->where('email', $email)->value('image');
        $id = DB::table('users')->where('email', $email)->value('id');
        if ($role == 'admin'){
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }
        }
        return $next($request);
    }else if ($role == 'user'){
      if(Hash::check($request->password,$pass)){
        //   session_start();
        //   $_SESSION['email']=$email;
        //   $_SESSION['name']=$name;
        session(['name'=>$name]);
        session(['email'=>$email]);
        session(['image'=>$img]);
        session(['id'=>$id]);
        return redirect('/main');
      }else{return $next($request);}
    }
    return redirect('/');
    }
}
