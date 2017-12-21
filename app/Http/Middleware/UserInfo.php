<?php
namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;
use Illuminate\Support\Facades\Auth;


class UserInfo
{
    /**
     * The trusted proxies for this application.
     *
     * @var array
     */
    public function handle(Request $request, Closure $next)
    {

        view()->share('user',Auth::user()->toArray());

        return $next($request);
    }
}
