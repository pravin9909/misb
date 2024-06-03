<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\backend\LoginController;
use Auth;
class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
//     public function handle(Request $request, Closure $next): Response
//     {
//         // dd(Session::get('loginEmail'));
//         if (Session::has('loginEmail')) {
          
//         } else {
// //return redirect()->to('/admin')->with('login','Please login');
//         }
//         return $next($request);
//     }

public function handle($request, Closure $next)
    {
        // if (Session::has('loginEmail')) {
        // } else {
        //     return redirect()->route('admin')->with('login','Please login');
        // }
        // if (!Auth::guard('admin')->check()) {
        //     return redirect()->route('admin'); // Redirect to admin login route
        // }
        return $next($request);
    }
}
