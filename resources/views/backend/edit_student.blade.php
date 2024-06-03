@extends('backendlayouts.master')
@section('content')
<div class="main-content">

  <div class="page-content">
      <div class="container-fluid">
<div class="row">
  <div class="col-lg-12">
      <div class="card">
          <div class="card-body">
          
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('create-student.update', $editStudent->id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
                @csrf
                <div class="row">
                    {{-- <div class="col-md-6">
                        <div class="mb-3">
                            <label for="region" class="form-label">Region</label>
                            <select id="region" class="form-select" data-choices data-choices-sorting="true" name="region">
                                <option value="">Choose...</option>
                                <option value="Resident Français étudiant">Resident Français étudiant</option>
                                <option value="Européen">Européen</option>
                                <option value="Non Européen">Non Européen</option>
                            </select>
                            @error('region')
                               <span style="color:red;"> {{ $message }}</span> 
                            @enderror
                        </div>
                    </div> --}}
                    <!--end col-->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="familyName" class="form-label">Family Name*</label>
                            <input type="text" class="form-control"  id="familyName" name="familyName" value=" {{ $editStudent->familyName }} ">
                        </div>
                        @error('familyName')
                        <span style="color:red;"> {{ $message }}</span> 
                     @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="firstName" class="form-label">First Name*</label>
                            <input type="text" class="form-control"  id="firstName" name="firstName" value=" {{ $editStudent->firstName }} ">
                        </div>
                        @error('firstName')
                        <span style="color:red;"> {{ $message }}</span> 
                     @enderror
                    </div>
                    <!--end col-->
                   
                    <!--end col-->
                 
                    <!--end col-->
                 
                    <!--end col-->
                   
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="passportNumber" class="form-label">Passport Number</label>
                            <input type="text" class="form-control"  id="passportNumber" name="passportNumber" value=" {{ $editStudent->passportNumber }} ">
                        </div>
                        @error('passportNumber')
                        <span style="color:red;"> {{ $message }}</span> 
                     @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="telephone" class="form-label">Telephone</label>
                            <input type="tel" class="form-control"  id="telephone" name="telephone" value=" {{ $editStudent->telephone }} ">
                        </div>
                        @error('telephone')
                        <span style="color:red;"> {{ $message }}</span> 
                     @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control"  id="email" name="email" value=" {{ $editStudent->email }} ">
                        </div>
                        @error('email')
                        <span style="color:red;"> {{ $message }}</span> 
                     @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="address" class="form-control"  id="address" name="address" value=" {{ $editStudent->address }} ">
                        </div>
                        @error('address')
                        <span style="color:red;"> {{ $message }}</span> 
                     @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="city" class="form-label">City</label>
                            <input type="city" class="form-control"  id="city" name="city" value=" {{ $editStudent->city }} ">
                        </div>
                        @error('city')
                        <span style="color:red;"> {{ $message }}</span> 
                     @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="zipcode" class="form-label">ZIP Code</label>
                            <input type="zipcode" class="form-control"  id="zipcode" name="zipcode" value=" {{ $editStudent->zipcode }} ">
                        </div>
                        @error('zipcode')
                        <span style="color:red;"> {{ $message }}</span> 
                     @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="dob" class="form-label">DoB</label>
                            <input type="dob" class="form-control"  id="dob" name="dob" value=" {{ $editStudent->dob }} ">
                        </div>
                        @error('dob')
                        <span style="color:red;"> {{ $message }}</span> 
                     @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nationality" class="form-label">Nationality</label>
                            <input type="text" class="form-control"  id="nationality" name="nationality" value=" {{ $editStudent->nationality }} ">
                        </div>
                        @error('nationality')
                        <span style="color:red;"> {{ $message }}</span> 
                     @enderror
                    </div>
                    <h3>Latest academic details *</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="qualification" class="form-label">Qualification</label>
                                <input type="text" class="form-control"  id="qualification" name="qualification" value=" {{ $editStudent->qualification }} ">
                            </div>
                            @error('qualification')
                            <span style="color:red;"> {{ $message }}</span> 
                         @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="school" class="form-label">School </label>
                                <input type="text" class="form-control"  id="school" name="school" value=" {{ $editStudent->school }} ">
                            </div>
                            @error('school')
                            <span style="color:red;"> {{ $message }}</span> 
                         @enderror
                        </div>
                        <!--end col-->
                        <div class="col-lg-6 ">
                            <div class="mb-3">
                                <label for="level_french" class="form-label">Level French</label>
                                <input type="text" class="form-control" class="form-control" name="level_french" id ="level_french" value=" {{ $editStudent->level_french }} ">
                                {{-- <select class="form-control" name="level_french" required>
                                    <option value="">Sélectionner</option>
                                    <option value="A0">A0</option>
                                    <option value="A1">A1</option>
                                    <option value="A2">A2</option>
                                    <option value="B1">B1</option>
                                    <option value="B2">B2</option>
                                    <option value="C1">C1</option>
                                    <option value="C2">C2</option>
                                </select> --}}
                                @error('level_french')
                                <span style="color:red;"> {{ $message }}</span> 
                             @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="mb-3">
                                <label for="level_english" class="form-label">Level English </label>
                                <input type="text" class="form-control" class="form-control" name="level_english" id ="level_english" value=" {{ $editStudent->level_english }} ">
                                {{-- <select class="form-control" name="level_english" required>
                                    <option value="">Sélectionner</option>
                                    <option value="A0">A0</option>
                                    <option value="A1">A1</option>
                                    <option value="A2">A2</option>
                                    <option value="B1">B1</option>
                                    <option value="B2">B2</option>
                                    <option value="C1">C1</option>
                                    <option value="C2">C2</option>
                                </select> --}}
                                @error('level_english')
                                <span style="color:red;"> {{ $message }}</span> 
                             @enderror
                            </div>
                        </div>
                    </div>
                    <h3>Program selection</h3>
        <div class="row">
                        <div class="col-lg-6 ">
                            <div class="mb-3">
                                <label for="intake_year" class="form-label">Intake Year </label>
                                <input type="text" class="form-control" name="intake_year" id ="intake_year" value=" {{ $editStudent->intake_year }} ">
                                {{-- <select class="form-control" name="intake_year" required>
                                    <option value="">Sélectionner une date</option>
                                
                                        <option value="Février 2024-2025">Février 2024-2025</option>
                                        <option value="Mai 2024-2025">Mai 2024-2025</option>
                                        <option value="Septembre 2024-2025">Septembre 2024-2025</option>
                                </select> --}}
                                @error('intake_year')
                                <span style="color:red;"> {{ $message }}</span> 
                             @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="mb-3">
                                <label for="pay_de_residence" class="form-label">Residence </label>
                                <input type="text" class="form-control" name="pay_de_residence" id ="pay_de_residence" value=" {{ $editStudent->pay_de_residence }} ">
                                {{-- <select class="form-control" name="pay_de_residence"
                                            onChange="callOrigin(this.value)" required>
                                            <option value="Resident_Français_étudiant">Resident Français étudiant
                                            </option>
                                            <option value="Européen">Européen</option>
                                            <option value="Non Européen">Non Européen</option>
                                        </select> --}}
                                        @error('pay_de_residence')
                                <span style="color:red;"> {{ $message }}</span> 
                             @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="mb-3">
                                <label for="programSelect" class="form-label">Select Programme  </label>
                                <input type="text" class="form-control" name="programSelect" id ="programSelect" value=" {{ $editStudent->programSelect }} ">
                                {{-- <select class="form-control" id="programSelect" name="programSelect">
                                <option value="">Sélectionnez les programmes</option>
                                <option value="bbs">BBS Programmes</option>
                                <option value="mba">MBA Programmes </option>
                                <option value="dba">DBA Programmes</option>
                            </select> --}}
                            @error('programSelect')
                            <span style="color:red;"> {{ $message }}</span> 
                         @enderror
                            </div>
                        </div>
                        
                    <div class="col-lg-6 ">
                        <div class="mb-3">
                            <label id="programSelected" class="form-label">Programme  </label>
                          <input type="text" class="form-control" name="programSelected" id="programSelected" value=" {{ $editStudent->programSelected }} ">
                          @error('programSelected')
                          <span style="color:red;"> {{ $message }}</span> 
                       @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="mb-3">
                            <label for="langSelect" class="form-label">Language  </label>
                            <input type="text" class="form-control" name="langSelect" id ="langSelect" value=" {{ $editStudent->langSelect }} ">
                            {{-- <select class="form-control" id="langProgramSelect" name="langSelect">
                                <option value="">Sélectionnez les Langue</option>
                                <option value="Anglais">Anglais</option>
                                <option value="Français">Français </option>
                            </select> --}}
                            @error('langSelect')
                          <span style="color:red;"> {{ $message }}</span> 
                       @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="mb-3">
                            <label for="agent" class="form-label">Référence (Sinon, veuillez marquer NA.) *</label>
                                <input type="text" class="form-control" id="agent" name="agent" class="form-control" value=" {{ $editStudent->agent }} ">
                                @error('agent')
                                <span style="color:red;"> {{ $message }}</span> 
                             @enderror
                        </div>
                    </div>
                      
                    <div class="col-lg-6 " id="hide_moi">
                        <div class="mb-3">
                            <label for="moi" class="form-label">Certificat de Compétence Linguistique (MOI) (IELTS, TOFELS, DELF ou DALF)
                                </label>
                                <div class="row">
                                    <div class="col-lg-9">
                                        <input type="file" class="form-control" name="moi" id ="moi" >
                                        <input type="hidden" name ="old_moi" value="{{ $editStudent->moi }}">
                                    </div>
                                    <div class="col-lg-3">
                                        <a href="{{ asset('assets/application/' . $editStudent->moi) }}" download="moi"><span id="remove_moi"><i class="ri-download-2-fill align-middle me-1"></i> Download</span></a>
                                    </div>
                                </div>
                            {{-- <input type="file" class="form-control"  name="moi" value=""> --}}
                            @error('moi')
                            <span style="color:red;"> {{ $message }}</span> 
                         @enderror
                        </div>
                    </div>
                    <div class="col-lg-6" id="hide_motivational_letter">
                        <div class="mb-3">
                            <label for="motivational_letter" class="form-label">Motivational Letter *</label>
                            <div class="row">
                                <div class="col-lg-9">
                                    <input type="file" class="form-control" name="motivational_letter" id ="motivational_letter" value=" {{ $editStudent->motivational_letter }} ">
                                    <input type="hidden" name ="old_motivational_letter" value="{{ $editStudent->motivational_letter }}">
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{ asset('assets/application/' . $editStudent->motivational_letter) }}" download="motivational_letter"><span id="remove_motivational_letter"><i class="ri-download-2-fill align-middle me-1"></i> Download</span></a>
                                </div>
                            </div>

                            {{-- <input type="file" name="motivational_letter" class="form-control" value=""> --}}
                            @error('motivational_letter')
                            <span style="color:red;"> {{ $message }}</span> 
                         @enderror
                        </div>
                    </div>
                    <div class="col-lg-6" id="curriculum_vitae">
                        <div class="mb-3">
                            <label for="curriculum_vitae" class="form-label">CV </label>
                            <div class="row">
                                <div class="col-lg-9">
                                    <input type="file" class="form-control" name="curriculum_vitae" id ="curriculum_vitae" value=" {{ $editStudent->curriculum_vitae }} ">
                                    <input type="hidden" name ="old_curriculum_vitae" value="{{ $editStudent->curriculum_vitae }}">
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{ asset('assets/application/' . $editStudent->curriculum_vitae) }}" download="curriculum_vitae"><span id="remove_curriculum_vitae"><i class="ri-download-2-fill align-middle me-1"></i> Download</span></a>
                                </div>
                            </div>

                            @error('curriculum_vitae')
                            <span style="color:red;"> {{ $message }}</span> 
                         @enderror
                            {{-- <input type="file" name="curriculum_vitae" class="form-control" value=""> --}}
                        </div>
                    </div>
                  
                    <div class="col-lg-6" id="titre">
                        <div class="mb-3">
                            <label for="visa" class="form-label">Titre de séjour / Visa </label>
                            <div class="row">
                                <div class="col-lg-9">
                                    <input type="file" class="form-control" name="visa" id ="visa" value=" {{ $editStudent->visa }} ">
                                    <input type="hidden" name ="old_visa" value="{{ $editStudent->visa }}">
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{ asset('assets/application/' . $editStudent->visa) }}" download="visa"><span id="remove_visa"><i class="ri-download-2-fill align-middle me-1"></i> Download</span></a>
                                </div>
                            </div>
                            @error('visa')
                            <span style="color:red;"> {{ $message }}</span> 
                         @enderror
                            {{-- <input type="file" class="form-control" name="visa" value=""> --}}
                        </div>
                    </div>
                    <div class="col-lg-6" id="hide_diploma">
                        <div class="mb-3">
                            <label for="diploma" class="form-label">Copie du dernier diplôme </label>
                            <div class="row">
                                <div class="col-lg-9">
                                    <input type="file" class="form-control" name="diploma" id ="diploma" value=" {{ $editStudent->diploma }} ">
                                    <input type="hidden" name ="old_diploma" value="{{ $editStudent->diploma }}">
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{ asset('assets/application/' . $editStudent->diploma) }}" download="diploma"><span id="remove_diploma"><i class="ri-download-2-fill align-middle me-1"></i> Download</span></a>
                                </div>
                            </div>
                            @error('diploma')
                            <span style="color:red;"> {{ $message }}</span> 
                         @enderror
                            {{-- <input type="file" class="form-control" name="diploma" value=""> --}}
                        </div>
                    </div>
                    <div class="col-lg-6" id="hide_passportsize">
                        <div class="mb-3">
                            <label for="passportsize" class="form-label">Une photo d’identité </label>
                            <div class="row">
                                <div class="col-lg-9">
                                    <input type="file" class="form-control" name="passportsize" id ="passportsize" value=" {{ $editStudent->passportsize }} ">
                                    <input type="hidden" name ="old_passportsize" value="{{ $editStudent->passportsize }}">
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{ asset('assets/application/' . $editStudent->passportsize) }}" download="passportsize"><span id="remove_passportsize"><i class="ri-download-2-fill align-middle me-1"></i> Download</span></a>
                                </div>
                            </div>
                 
                            @error('passportsize')
                            <span style="color:red;"> {{ $message }}</span> 
                         @enderror
                            {{-- <input type="file" class="form-control" name="passportsize" value=""> --}}
                        </div>
                    </div>
                    <div class="col-lg-6" id="hide_idcard">
                        <div class="mb-3">
                            <label for="idcard" class="form-label">Votre Passport </label>
                            <div class="row">
                                <div class="col-lg-9">
                                    <input type="file" class="form-control" name="idcard" id ="idcard" value=" {{ $editStudent->idcard}}">
                                    <input type="hidden" name ="old_idcard" value="{{ $editStudent->idcard }}">
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{ asset('assets/application/' . $editStudent->idcard) }}" download="idcard"><span id="remove_idcard"><i class="ri-download-2-fill align-middle me-1"></i> Download</span></a>
                                </div>
                            </div>
                            
                            @error('idcard')
                            <span style="color:red;"> {{ $message }}</span> 
                         @enderror
                            {{-- <input type="file" class="form-control" name="idcard" value=""> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="mb-3">
                            <label for="total_fees" class="form-label">Total Fees  </label>
                             <input type="text" class="form-control" name="total_fees" id ="total_fees" value=" {{ $editStudent->total_fees }} " required>
                            @error('total_fees')
                          <span style="color:red;"> {{ $message }}</span> 
                       @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="mb-3">
                            <label for="fees_paid" class="form-label"> Fees Paid </label>
                             <input type="text" class="form-control" name="fees_paid" id ="fees_paid" value=" {{ $editStudent->fees_paid }} " required>
                            @error('fees_paid')
                          <span style="color:red;"> {{ $message }}</span> 
                       @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="mb-3">
                            <label for="balance_fees" class="form-label">Balance Fees  </label>
                             <input type="text" class="form-control" name="balance_fees" id ="balance_fees" value=" {{ $editStudent->balance_fees }} "readonly required >
                            @error('balance_fees')
                          <span style="color:red;"> {{ $message }}</span> 
                       @enderror
                        </div>
                    </div>
                    </div>
                  
               
                    <!--end col-->
                    <div class="col-lg-12">
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </form>
          </div><!-- end card -->
      </div>
      <!-- end col -->
  </div>
  <!-- end col -->
</div>
</div>
</div>
</div>

@endsection
@section('script')
<script>
    $(document).ready(function() {
 var moi = $('input[name="old_moi"]').val();
 var motivational_letter = $("input[name='old_motivational_letter']").val();
 var curriculum_vitae = $("input[name='old_curriculum_vitae']").val();
 var visa = $("input[name='old_visa']").val();
 var diploma = $("input[name='old_diploma']").val();
 var passportsize = $("input[name='old_passportsize']").val();
 var idcard = $("input[name='old_idcard']").val();
 if(moi == null || moi === "") {
    $("#remove_moi").css("display","none");
    $("#hide_moi").css("display","none");
 }
 if(motivational_letter == null || motivational_letter == "") {
    $("#remove_motivational_letter").css("display","none");
    $("#hide_motivational_letter").css("display","none");
 }
 if(curriculum_vitae == null || curriculum_vitae === "") {
    $("#remove_curriculum_vitae").css("display","none");
    $("#curriculum_vitae").css("display","none");
 }
 if(visa == null || visa === "") {
    $("#remove_visa").css("display","none");
    $("#titre").css("display","none");
 }
 if(diploma == null || diploma === "") {
    $("#remove_diploma").css("display","none");
 }
 if(passportsize == null || passportsize === "") {
    $("#remove_passportsize").css("display","none");
 }
if(idcard == null || idcard === "") {
    $("#remove_idcard").css("display","none");
 }
    });
  </script>
  <script>
//     $('#motivational_letter').on('change', function() {
//     var files = $(this)[0].files;
//     if (files.length > 0) {
//         var selectedFile = files[0];
//         console.log("File name: " + selectedFile.name);
//         console.log("File type: " + selectedFile.type);
//         console.log("File size: " + selectedFile.size + " bytes");
//     }
// });
    </script> 
@endsection