<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Student;
class ApplicationController extends Controller
{
    //
    public function application() {
     $application = Application::all();
     $student = Student::select('application_id')->get();
    //dd( $studnet);
     return view('backend.application',compact('application','student'));
    }
    public function delete($id) {
        $application_id = Application::find($id);
        //return $application_id;
        $application_id->delete();
        return redirect()->to('/admin/application')->with('success','Deleted successfully');
    }
    public function view($id) {
        $applicationView = Application::where('id',$id)->first();
        return view('backend.view_application',compact('applicationView'));
    }
    public function create_application() {
        return view('backend.add_application');
       }
   
    public function create_application_post(Request $req) {
       // dd($req->all());
        $req->validate([
'familyName' => 'required',
'firstName' => 'required',
'passportNumber' => 'required',
'telephone' => 'required',
'email' => 'required',
'address' => 'required',
'city' => 'required',
'zipcode' => 'required',
'dob' => 'required',
'nationality' => 'required',
'qualification' => 'required',
'School' => 'required',
'level_french' => 'required',
'level_english' => 'required',
'intake_year' => 'required',
'pay_de_residence' => 'required',
'programSelect' => 'required',
'langSelect' => 'required',
'passportsize' => 'required|file|mimes:pdf,doc,docx,jpeg,jpg,png,gif,svg|max:2048',
'idcard' => 'required|file|mimes:pdf,doc,docx,jpeg,jpg,png,gif,svg|max:2048',
'diploma' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png,gif,svg|max:2048',
// 'agent' =>'sometimes|required',
// 'moi' => 'sometimes|required|file|mimes:pdf,doc,docx,jpg,jpeg,png,gif,svg|max:2048',
// 'curriculum_vitae' => 'sometimes|required|file|mimes:pdf,doc,docx,jpg,jpeg,png,gif,svg|max:2048',
// 'motivational_letter' => 'sometimes|required|file|mimes:pdf,doc,docx,jpg,jpeg,png,gif,svg|max:2048',
        ]);
$application = new Application();
$application->familyName = $req->familyName;
$application->firstName = $req->firstName;
$application->passportNumber = $req->passportNumber;
$application->telephone = $req->telephone;
$application->email = $req->email;
$application->address = $req->address;
$application->city = $req->city;
$application->zipcode = $req->zipcode;
$application->dob = $req->dob;
$application->nationality = $req->nationality;
$application->qualification = $req->qualification;
$application->School = $req->School;
$application->level_french = $req->level_french;
$application->level_english = $req->level_english;
$application->intake_year = $req->intake_year;
$application->pay_de_residence = $req->pay_de_residence;
$application->programSelect = $req->programSelect;
$application->langSelect = $req->langSelect;
$application->programSelected = $req->tempprogramSelected;
$application->agent = $req->agent;
if($req->has('motivational_letter')) {
    $file = $req->file('motivational_letter');
            $extenstion = $file->getClientOriginalExtension();
            $motivational_letter = time().'.'.$extenstion;
            $file->move('assets/application/motivational_letter/', $motivational_letter);
            $application->motivational_letter = $motivational_letter;
} else {
    $application->motivational_letter = Null;
}
if($req->has('curriculum_vitae')) {
    $file = $req->file('curriculum_vitae');
            $extenstion = $file->getClientOriginalExtension();
            $curriculum_vitae = time().'.'.$extenstion;
            $file->move('assets/application/cv/', $curriculum_vitae);
            $application->curriculum_vitae = $curriculum_vitae;
} else {
    $application->curriculum_vitae = Null;
}
if($req->has('moi')) {
    $file = $req->file('moi');
            $extenstion = $file->getClientOriginalExtension();
            $moi = time().'.'.$extenstion;
            $file->move('assets/application/moi/', $moi);
            $application->moi = $moi;
} else {
    $application->moi = Null;
}

if($req->has('visa')) {
    $file = $req->file('visa');
            $extenstion = $file->getClientOriginalExtension();
            $visa = time().'.'.$extenstion;
            $file->move('assets/application/visa', $visa);
            $application->visa = $visa;
} else {
    $application->visa = Null;
}
if($req->has('diploma')) {
    $file = $req->file('diploma');
            $extenstion = $file->getClientOriginalExtension();
            $filenamediploma = time().'.'.$extenstion;
            $file->move('assets/application/diploma/', $filenamediploma);
            $application->diploma = $filenamediploma;
}
if($req->has('passportsize')) {
    $file = $req->file('passportsize');
            $extenstion = $file->getClientOriginalExtension();
            $filenamepassport = time().'.'.$extenstion;
            $file->move('assets/application/passportsize/', $filenamepassport);
            $application->passportsize = $filenamepassport;
}
if($req->has('idcard')) {
    $file = $req->file('idcard');
            $extenstion = $file->getClientOriginalExtension();
            $filenameidcard = time().'.'.$extenstion;
            $file->move('assets/application/idcard/', $filenameidcard);
            $application->idcard = $filenameidcard;
}
$application->save();
return redirect('/admin/application')->with('success','Application created successfully');
    }
 
}
