<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    
         public function handle($request, Closure $next, $qwer) {
     $id = Auth::id();
     $roles = User::find($id)->roles()->value('name');
      if (!$roles = $qwer) {
            return redirect('/home'); // редирект куда угодно
        }
     return $next($request);
    }
}
