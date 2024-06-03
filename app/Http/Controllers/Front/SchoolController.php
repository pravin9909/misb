<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    //
    public function directer_message() {
return view('front.directer_message');
    }

    public function education_manager_word() {
        return view('front.education_manager_word');
    }

    public function vision() {
        return view('front.vision');
    }
}
