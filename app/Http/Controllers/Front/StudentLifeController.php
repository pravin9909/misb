<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentLifeController extends Controller
{
    //
    public function student_life() {
         return view('front.student_life');
        //return "mughis";
    }
}
