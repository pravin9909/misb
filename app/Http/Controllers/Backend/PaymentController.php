<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
class PaymentController extends Controller
{
    //
    public function index() {
        $student = Student::where('status','1')->get();
        //dd($student);
        return view('backend.payment',compact('student'));
    }
}
