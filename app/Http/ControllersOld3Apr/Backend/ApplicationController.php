<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Application;
class ApplicationController extends Controller
{
    //
    public function application() {
     $application = Application::all();
     return view('backend.application',compact('application'));
    }
    public function delete($id) {
        $application_id = Application::find($id);
        //return $application_id;
        $application_id->delete();
        return redirect()->to('/admin/application');
    }
}
