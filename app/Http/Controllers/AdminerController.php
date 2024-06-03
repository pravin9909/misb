<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminerController extends Controller
{
    //
    public function index() {
       // return "mughis";
        return view('adminer');
    }
}
