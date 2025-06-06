<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->userTypeId == 1) {
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->userTypeId == 2) {
            return redirect('/home');
        }
        return redirect('/login')->with('message','กรุณาเข้าสู่ระบบ');
    }
}
?>