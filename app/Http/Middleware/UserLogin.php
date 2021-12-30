<?php

// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Http\Request;
namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
      $email = $request->email;
      $role = DB::table('users')->where('email', $email)->value('role');
      $pass = DB::table('users')->where('email', $email)->value('password');
      $name = DB::table('users')->where('email', $email)->value('name');
      $img = DB::table('users')->where('email', $email)->value('image');
      $id = DB::table('users')->where('email', $email)->value('id');
      if ($role == 'user'){
        foreach ($guards as $guard) {
          if (Auth::guard($guard)->check()) {
              return redirect('/main');
          }
      }

  }

  return $next($request);
    }
}
