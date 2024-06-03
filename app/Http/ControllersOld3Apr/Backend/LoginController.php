<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    //
    public function index() {
      //  dd('ok');
        return view('backend.login');
    }
    public function index_post(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/admin/dashboard');
        }

        return redirect()->back()->withInput($request->only('email'));
//        $req->validate([
// 'email' => 'required',
// 'password' => 'required',
//        ]);
//        $user = User::where('email',$req->email)->first();
//        if($user) {
// if(Hash::check($req->password,$user->password)) {
// $req->session()->put('loginEmail',$user->email);
// return redirect('/admin/dashboard');
// } else {
//     return back()->with('fail','Password is wrong');
// }
//        } else {
//         return back()->with('fail','Email is wrong');
//        }
    }

    public function logout() {
        Auth::logout();
    return redirect('/admin');
       // if(Session::has('loginEmail')) {
          //  Session::pull('loginEmail');
            
      //  }
        //return redirect()->to('/admin');
    }
}
