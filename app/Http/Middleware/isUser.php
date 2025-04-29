<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class isUser{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user() && Auth::user()->userTypeId == 2){
            return $next($request);
        }elseif(Auth::user() && Auth::user()->userTypeId == 1){
            return redirect(to: '/home');
        }
        return redirect('/login')->with('message','กรุณาเข้าสู่ระบบ');
}
}
?>