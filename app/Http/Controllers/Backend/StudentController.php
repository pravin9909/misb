<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Student;
use Illuminate\Support\Facades\File;
class StudentController extends Controller
{
    //
    public function index() {
     $student = Student::where('status','1')->get();
     return view('backend.student',compact('student'));
    }
    // public function delete($id) {
    //     $application_id = Application::find($id);
    //     //return $application_id;
    //     $application_id->delete();
    //     return redirect()->to('/admin/application');
    // }
    public function create_student($id) {
        $createStudent = Application::where('id',$id)->first();
        //$applicationView = Application::where('id',$id)->first();
        return view('backend.add_student',compact('createStudent'));
    }
    public function create_student1() {
      //$applicationView = Application::where('id',$id)->first();
      return view('backend.add_student1');
  }
    public function store(Request $req) {
      //dd("mughis");
      //dd($req->all());
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
//'school' => 'required',
'level_french' => 'required',
'level_english' => 'required',
'intake_year' => 'required',
'programSelect' => 'required',
// 'programSelected' => 'sometimes|required',
// 'agent' => 'required',
 'total_fees' => 'required',
 'balance_fees' => 'required'
// 'curriculum_vitae' => 'required',
// 'moi' => 'required',
// 'motivational_letter' => 'required',
// 'visa' => 'required',
// 'diploma' => 'required',
// 'passportsize' => 'required',
// 'idcard' => 'required',

]);
$student = new Student();
$student->application_id = $req->application_id;
$student->familyName = $req->familyName;
$student->firstName = $req->firstName;
$student->passportNumber = $req->passportNumber;
$student->telephone = $req->telephone;
$student->email = $req->email;
$student->address = $req->address;
$student->city = $req->city;
$student->zipcode = $req->zipcode;
$student->dob = $req->dob;
$student->nationality = $req->nationality;
$student->qualification = $req->qualification;
$student->school = $req->School;
$student->level_french = $req->level_french;
$student->level_english = $req->level_english;
$student->intake_year = $req->intake_year;
$student->pay_de_residence = $req->pay_de_residence;
$student->programSelect = $req->programSelect;
$student->langSelect = $req->langSelect;
$student->agent = $req->reference;
if($req->has('curriculum_vitae')) {
  $student->programSelected = $req->programSelected;
} else {
  $student->programSelected = $req->programSelected_old;
}

$student->agent = $req->agent;
$student->motivational_letter = $req->motivational_letter;
$student->curriculum_vitae = $req->curriculum_vitae;
$student->moi = $req->moi;
$student->visa = $req->visa;
$student->diploma = $req->diploma;
$student->passportsize = $req->idcard;
$student->idcard = $req->idcard;
$student->total_fees = $req->total_fees;
$student->fees_paid = $req->fees_paid;
$student->balance_fees = $req->balance_fees;
if($req->has('motivational_letter')) {
  $file = $req->file('motivational_letter');
          $extenstion = $file->getClientOriginalExtension();
          $motivational_letter = time().'.'.$extenstion;
          $file->move('assets/application/motivational_letter/', $motivational_letter);
          $student->motivational_letter = $motivational_letter;
} else {
  $student->motivational_letter = $req->motivational_letter_old;
}
if($req->has('curriculum_vitae')) {
  $file = $req->file('curriculum_vitae');
          $extenstion = $file->getClientOriginalExtension();
          $curriculum_vitae = time().'.'.$extenstion;
          $file->move('assets/application/cv/', $curriculum_vitae);
          $student->curriculum_vitae = $curriculum_vitae;
} else {
  $student->curriculum_vitae = $req->curriculum_vitae_old;
}
if($req->has('moi')) {
  $file = $req->file('moi');
          $extenstion = $file->getClientOriginalExtension();
          $moi = time().'.'.$extenstion;
          $file->move('assets/application/moi/', $moi);
          $student->moi = $moi;
} else {
  $student->moi = $req->moi_old;
}

if($req->has('visa')) {
  $file = $req->file('visa');
          $extenstion = $file->getClientOriginalExtension();
          $visa = time().'.'.$extenstion;
          $file->move('assets/application/visa', $visa);
          $student->visa = $visa;
} else {
  $student->visa = $req->visa_old;
}
if($req->has('diploma')) {
  $file = $req->file('diploma');
          $extenstion = $file->getClientOriginalExtension();
          $filenamediploma = time().'.'.$extenstion;
          $file->move('assets/application/diploma/', $filenamediploma);
          $student->diploma = $filenamediploma;
} else {
  $student->diploma = $req->diploma_old;
}
if($req->has('passportsize')) {
  $file = $req->file('passportsize');
          $extenstion = $file->getClientOriginalExtension();
          $filenamepassport = time().'.'.$extenstion;
          $file->move('assets/application/passportsize/', $filenamepassport);
          $student->passportsize = $filenamepassport;
} else {
  $student->passportsize = $req->passportsize_old;
}
if($req->has('idcard')) {
  $file = $req->file('idcard');
          $extenstion = $file->getClientOriginalExtension();
          $filenameidcard = time().'.'.$extenstion;
          $file->move('assets/application/idcard/', $filenameidcard);
          $student->idcard = $filenameidcard;
} else {
  $student->idcard = $req->idcard_old;
}
$student->save();
return redirect('/admin/student')->with('success','Student data created successfully');
}
public function delete($id) {
   // dd("mughis");
Student::where('id',$id)->update(['status' => '0']);
return redirect('/admin/student')->with('success','Student data deleted successfully');
}
public function view($id) {
    // dd("mughis");
 $studentView = Student::where('id',$id)->first();
 return view('backend.view_student',compact('studentView'));
}
 public function edit($id) {
   //  dd("mughis");
 $editStudent = Student::where('id',$id)->first();
 return view('backend.edit_student',compact('editStudent'));
 }
 public function store1(Request $req) {
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
          'school' => 'required',
          'level_french' => 'required',
          'level_english' => 'required',
          'intake_year' => 'required',
          'pay_de_residence' => 'required',
          'programSelect' => 'required',
          'langSelect' => 'required',
          'passportsize' => 'required|file|mimes:pdf,doc,docx,jpeg,jpg,png,gif,svg|max:2048',
          'idcard' => 'required|file|mimes:pdf,doc,docx,jpeg,jpg,png,gif,svg|max:2048',
          'diploma' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png,gif,svg|max:2048',
                  ]);
          $student = new Student();
          $student->familyName = $req->familyName;
          $student->firstName = $req->firstName;
          $student->passportNumber = $req->passportNumber;
          $student->telephone = $req->telephone;
          $student->email = $req->email;
          $student->address = $req->address;
          $student->city = $req->city;
          $student->zipcode = $req->zipcode;
          $student->dob = $req->dob;
          $student->nationality = $req->nationality;
          $student->qualification = $req->qualification;
          $student->school = $req->school;
          $student->level_french = $req->level_french;
          $student->level_english = $req->level_english;
          $student->intake_year = $req->intake_year;
          $student->pay_de_residence = $req->pay_de_residence;
          $student->programSelect = $req->programSelect;
          $student->langSelect = $req->langSelect;
          $student->programSelected = $req->tempprogramSelected;
          $student->agent = $req->agent;
          // $student->reference = $req->reference;
          if($req->has('motivational_letter')) {
              $file = $req->file('motivational_letter');
                      $extenstion = $file->getClientOriginalExtension();
                      $motivational_letter = time().'.'.$extenstion;
                      $file->move('assets/application/motivational_letter/', $motivational_letter);
                      $student->motivational_letter = $motivational_letter;
          } else {
              $student->motivational_letter = Null;
          }
          if($req->has('curriculum_vitae')) {
              $file = $req->file('curriculum_vitae');
                      $extenstion = $file->getClientOriginalExtension();
                      $curriculum_vitae = time().'.'.$extenstion;
                      $file->move('assets/application/cv/', $curriculum_vitae);
                      $student->curriculum_vitae = $curriculum_vitae;
          } else {
              $student->curriculum_vitae = Null;
          }
          if($req->has('moi')) {
              $file = $req->file('moi');
                      $extenstion = $file->getClientOriginalExtension();
                      $moi = time().'.'.$extenstion;
                      $file->move('assets/application/moi/', $moi);
                      $student->moi = $moi;
          } else {
              $student->moi = Null;
          }
          
          if($req->has('visa')) {
              $file = $req->file('visa');
                      $extenstion = $file->getClientOriginalExtension();
                      $visa = time().'.'.$extenstion;
                      $file->move('assets/application/visa', $visa);
                      $student->visa = $visa;
          } else {
              $student->visa = Null;
          }
          if($req->has('diploma')) {
              $file = $req->file('diploma');
                      $extenstion = $file->getClientOriginalExtension();
                      $filenamediploma = time().'.'.$extenstion;
                      $file->move('assets/application/diploma/', $filenamediploma);
                      $student->diploma = $filenamediploma;
          }
          if($req->has('passportsize')) {
              $file = $req->file('passportsize');
                      $extenstion = $file->getClientOriginalExtension();
                      $filenamepassport = time().'.'.$extenstion;
                      $file->move('assets/application/passportsize/', $filenamepassport);
                      $student->passportsize = $filenamepassport;
          }
          if($req->has('idcard')) {
              $file = $req->file('idcard');
                      $extenstion = $file->getClientOriginalExtension();
                      $filenameidcard = time().'.'.$extenstion;
                      $file->move('assets/application/idcard/', $filenameidcard);
                      $student->idcard = $filenameidcard;
          }
          $student->total_fees = $req->total_fees;
          $student->fees_paid = $req->fees_paid;
          $student->balance_fees = $req->balance_fees;
          $student->save();
          return redirect('/admin/student')->with('success','Student created successfully');
}
            
 
 public function update(Request $req,$id) {
  //dd($req->all());
      //dd($id);
    // $req->validate([
    //     'familyName' => 'required',
    //     'firstName' => 'required',
    //     'passportNumber' => 'required',
    //     'telephone' => 'required',
    //     'email' => 'required',
    //     'address' => 'required',
    //     'city' => 'required',
    //     'zipcode' => 'required',
    //     'dob' => 'required',
    //     'nationality' => 'required',
    //     'qualification' => 'required',
    //     'School' => 'required',
    //     'level_french' => 'required',
    //     'level_english' => 'required',
    //     'intake_year' => 'required',
    //     'agent' => 'sometimes|required',
    //     'visa' => 'sometimes|required',
    //     'moi' => 'sometimes|required',
    //     'motivational_letter' => 'sometimes|required',
    //     'diploma' => 'required',
    //     'passportsize' => 'required',
    //     'idcard' => 'required',
    //     'fees_information' => 'required',
    //     'fees' => 'required'
    //     ]);
        $student = Student ::Find($id);
        $student->familyName = $req->familyName;
        $student->firstName = $req->firstName;
        $student->passportNumber = $req->passportNumber;
        $student->telephone = $req->telephone;
        $student->email = $req->email;
        $student->address = $req->address;
        $student->city = $req->city;
        $student->zipcode = $req->zipcode;
        $student->dob = $req->dob;
        $student->nationality = $req->nationality;
        $student->qualification = $req->qualification;
        $student->school = $req->school;
        $student->level_french = $req->level_french;
        $student->level_english = $req->level_english;
        $student->intake_year = $req->intake_year;
        $student->pay_de_residence = $req->pay_de_residence;
        $student->programSelect = $req->programSelect;
        $student->langSelect = $req->langSelect;
        $student->programSelected = $req->programSelected;
        $student->agent = $req->agent;
        $student->total_fees = $req->total_fees;
        $student->fees_paid = $req->fees_paid;
        $student->balance_fees = $req->balance_fees;
        if($req->hasFile('motivational_letter')) {
          $destination = 'assets/application/motivational_letter/'.$student->motivational_letter;
          if(File::exists($destination))
          {
              File::delete($destination);
          }
          $file = $req->file('motivational_letter');
                  $extenstion = $file->getClientOriginalExtension();
                  $motivational_letter = time().'.'.$extenstion;
                  $file->move('assets/application/motivational_letter/', $motivational_letter);
                  $student->motivational_letter = $motivational_letter;
      } else {
          $student->motivational_letter = $req->old_motivational_letter;
      }
      if($req->hasFile('curriculum_vitae')) {
        $destination = 'assets/application/cv/'.$student->curriculum_vitae;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
          $file = $req->file('curriculum_vitae');
                  $extenstion = $file->getClientOriginalExtension();
                  $curriculum_vitae = time().'.'.$extenstion;
                  $file->move('assets/application/cv/', $curriculum_vitae);
                  $student->curriculum_vitae = $curriculum_vitae;
      } else {
        $student->curriculum_vitae = $req->old_curriculum_vitae;
      }
      if($req->hasFile('moi')) {
        $destination = 'assets/application/moi/'.$student->moi;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
          $file = $req->file('moi');
                  $extenstion = $file->getClientOriginalExtension();
                  $moi = time().'.'.$extenstion;
                  $file->move('assets/application/moi/', $moi);
                  $student->moi = $moi;
      } else {
        $student->moi = $req->old_moi;
      }
      
      if($req->hasFile('visa')) {
        $destination = 'assets/application/visa/'.$student->visa;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
          $file = $req->file('visa');
                  $extenstion = $file->getClientOriginalExtension();
                  $visa = time().'.'.$extenstion;
                  $file->move('assets/application/visa', $visa);
                  $student->visa = $visa;
      } else {
        $student->visa = $req->old_visa;
      }
      if($req->hasFile('diploma')) {
        $destination = 'assets/application/diploma/'.$student->diploma;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
          $file = $req->file('diploma');
                  $extenstion = $file->getClientOriginalExtension();
                  $filenamediploma = time().'.'.$extenstion;
                  $file->move('assets/application/diploma/', $filenamediploma);
                  $student->diploma = $filenamediploma;
      } else {
        $student->diploma = $req->old_diploma;
      }
      if($req->hasFile('passportsize')) {
        $destination = 'assets/application/passportsize/'.$student->passportsize;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
          $file = $req->file('passportsize');
                  $extenstion = $file->getClientOriginalExtension();
                  $filenamepassport = time().'.'.$extenstion;
                  $file->move('assets/application/passportsize/', $filenamepassport);
                  $student->passportsize = $filenamepassport;
      } else {
        $student->passportsize = $req->old_passportsize;
      }
      if($req->hasFile('idcard')) {
        $destination = 'assets/application/idcard/'.$student->idcard;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
          $file = $req->file('idcard');
                  $extenstion = $file->getClientOriginalExtension();
                  $filenameidcard = time().'.'.$extenstion;
                  $file->move('assets/application/idcard/', $filenameidcard);
                  $student->idcard = $filenameidcard;
      } else {
        $student->idcard = $req->old_idcard;
      }
        $student->save();
   
        return redirect('/admin/student')->with('success','Student data updated successfully');
  }
 
}