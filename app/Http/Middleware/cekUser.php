<?php

namespace App\Http\Middleware;

use Closure;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class cekUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $hakAkses)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $user =Auth::user();

        if($user->hak_akses == $hakAkses){
            
            return $next($request);
        }


        return redirect('login')->with('error',"Email dan Password anda salah");
    }
}
