<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    //

    public function index() {
        // $data = array();
        // if(Session::has('loginEmail')) {
        //     $data = User::where('email',$req->email)->first();
        // }
      // dd($data);
        return view('backend.index');
    }
    // public function application() {
    //     return view('backend.application');
    // }
}
