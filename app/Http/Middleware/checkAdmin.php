<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class checkAdmin
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
        $user_id = \Auth::id();
        $user = User::find($user_id);
        if($user->type != 'admin'){
            return redirect('/');
        }
        return $next($request);
    }
}
