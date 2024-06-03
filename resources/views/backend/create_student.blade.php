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
            <form action="{{ route('create-student.store')}}" method="post">
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
                            <label for="familyName" class="form-label">First Name</label>
                            <input type="text" class="form-control"  id="familyName" name="familyName" value=" {{ $createStudent->familyName }} ">
                        </div>
                        @error('familyName')
                        <span style="color:red;"> {{ $message }}</span> 
                     @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="firstName" class="form-label">Name</label>
                            <input type="text" class="form-control"  id="firstName" name="firstName" value=" {{ $createStudent->firstName }} ">
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
                            <label for="passportNumber" class="form-label">Passport</label>
                            <input type="text" class="form-control"  id="passportNumber" name="passportNumber" value=" {{ $createStudent->passportNumber }} ">
                        </div>
                        @error('passportNumber')
                        <span style="color:red;"> {{ $message }}</span> 
                     @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="telephone" class="form-label">Telephone</label>
                            <input type="tel" class="form-control"  id="telephone" name="telephone" value=" {{ $createStudent->telephone }} ">
                        </div>
                        @error('telephone')
                        <span style="color:red;"> {{ $message }}</span> 
                     @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control"  id="email" name="email" value=" {{ $createStudent->email }} ">
                        </div>
                        @error('email')
                        <span style="color:red;"> {{ $message }}</span> 
                     @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="address" class="form-control"  id="address" name="address" value=" {{ $createStudent->address }} ">
                        </div>
                        @error('address')
                        <span style="color:red;"> {{ $message }}</span> 
                     @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="city" class="form-label">City</label>
                            <input type="city" class="form-control"  id="city" name="city" value=" {{ $createStudent->city }} ">
                        </div>
                        @error('city')
                        <span style="color:red;"> {{ $message }}</span> 
                     @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="zipcode" class="form-label">ZIP Code</label>
                            <input type="zipcode" class="form-control"  id="zipcode" name="zipcode" value=" {{ $createStudent->zipcode }} ">
                        </div>
                        @error('zipcode')
                        <span style="color:red;"> {{ $message }}</span> 
                     @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="dob" class="form-control"  id="dob" name="dob" value=" {{ $createStudent->dob }} ">
                        </div>
                        @error('dob')
                        <span style="color:red;"> {{ $message }}</span> 
                     @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nationality" class="form-label">Nationality</label>
                            <input type="text" class="form-control"  id="nationality" name="nationality" value=" {{ $createStudent->nationality }} ">
                        </div>
                        @error('nationality')
                        <span style="color:red;"> {{ $message }}</span> 
                     @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="qualification" class="form-label">Facility Name</label>
                            <input type="text" class="form-control"  id="qualification" name="qualification" value=" {{ $createStudent->qualification }} ">
                        </div>
                        @error('qualification')
                        <span style="color:red;"> {{ $message }}</span> 
                     @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="School" class="form-label">Diploma obtained, or level of studies </label>
                            <input type="text" class="form-control"  id="School" name="School" value=" {{ $createStudent->School }} ">
                        </div>
                        @error('School')
                        <span style="color:red;"> {{ $message }}</span> 
                     @enderror
                    </div>
                    <!--end col-->
                    <div class="col-lg-6 ">
                        <div class="mb-3">
                            <label for="level_french" class="form-label">French language level </label>
                            <input type="text" class="form-control" class="form-control" name="level_french" id ="level_french" value=" {{ $createStudent->level_french }} ">
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
                            <label for="level_english" class="form-label">English level </label>
                            <input type="text" class="form-control" class="form-control" name="level_english" id ="level_english" value=" {{ $createStudent->level_english }} ">
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
                    <div class="col-lg-6 ">
                        <div class="mb-3">
                            <label for="intake_year" class="form-label">School year of registration </label>
                            <input type="text" class="form-control" name="intake_year" id ="intake_year" value=" {{ $createStudent->intake_year }} ">
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
                            <label for="pay_de_residence" class="form-label">Country of Residence </label>
                            <input type="text" class="form-control" name="pay_de_residence" id ="pay_de_residence" value=" {{ $createStudent->pay_de_residence }} ">
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
                            <label for="programSelect" class="form-label">Select programs  </label>
                            <input type="text" class="form-control" name="programSelect" id ="programSelect" value=" {{ $createStudent->programSelect }} ">
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
                            <label id="programSelected" class="form-label">Programs  </label>
                          <input type="text" class="form-control" name="programSelected" id="programSelected" value=" {{ $createStudent->programSelected }} ">
                          @error('programSelected')
                          <span style="color:red;"> {{ $message }}</span> 
                       @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="mb-3">
                            <label for="langSelect" class="form-label">Language  </label>
                            <input type="text" class="form-control" name="langSelect" id ="langSelect" value=" {{ $createStudent->langSelect }} ">
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
                                <input type="text" class="form-control" id="agent" name="agent" class="form-control" value=" {{ $createStudent->agent }} ">
                                @error('agent')
                                <span style="color:red;"> {{ $message }}</span> 
                             @enderror
                        </div>
                    </div>
                 
                    <div class="col-lg-6 ">
                        <div class="mb-3">
                            <label for="moi" class="form-label">Certificat de Compétence Linguistique (MOI) (IELTS, TOFELS, DELF ou DALF)
                                </label>
                                <input type="text" class="form-control" name="moi" id ="moi" value=" {{ $createStudent->moi }} ">
                            {{-- <input type="file" class="form-control"  name="moi" value=""> --}}
                            @error('moi')
                            <span style="color:red;"> {{ $message }}</span> 
                         @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="motivational_letter" class="form-label">Motivational Letter *</label>
                            <input type="text" class="form-control" name="motivational_letter" id ="motivational_letter" value=" {{ $createStudent->motivational_letter }} ">
                            {{-- <input type="file" name="motivational_letter" class="form-control" value=""> --}}
                            @error('motivational_letter')
                            <span style="color:red;"> {{ $message }}</span> 
                         @enderror
                        </div>
                    </div>
                    <div class="col-lg-6" id="curriculum_vitae">
                        <div class="mb-3">
                            <label for="curriculum_vitae" class="form-label">CV </label>
                            <input type="text" class="form-control" name="curriculum_vitae" id ="curriculum_vitae" value=" {{ $createStudent->curriculum_vitae }} ">
                            @error('curriculum_vitae')
                            <span style="color:red;"> {{ $message }}</span> 
                         @enderror
                            {{-- <input type="file" name="curriculum_vitae" class="form-control" value=""> --}}
                        </div>
                    </div>
                  
                    <div class="col-lg-6" id="titre">
                        <div class="mb-3">
                            <label for="visa" class="form-label">Titre de séjour / Visa </label>
                            <input type="text" class="form-control" name="visa" id ="visa" value=" {{ $createStudent->visa }} ">
                            @error('visa')
                            <span style="color:red;"> {{ $message }}</span> 
                         @enderror
                            {{-- <input type="file" class="form-control" name="visa" value=""> --}}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="diploma" class="form-label">Copie du dernier diplôme </label>
                            <input type="text" class="form-control" name="diploma" id ="diploma" value=" {{ $createStudent->diploma }} ">
                            @error('diploma')
                            <span style="color:red;"> {{ $message }}</span> 
                         @enderror
                            {{-- <input type="file" class="form-control" name="diploma" value=""> --}}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="passportsize" class="form-label">Une photo d’identité </label>
                            <input type="text" class="form-control" name="passportsize" id ="passportsize" value=" {{ $createStudent->passportsize }} ">
                            @error('passportsize')
                            <span style="color:red;"> {{ $message }}</span> 
                         @enderror
                            {{-- <input type="file" class="form-control" name="passportsize" value=""> --}}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="idcard" class="form-label">Votre Passport </label>
                            <input type="text" class="form-control" name="idcard" id ="idcard" value=" {{ $createStudent->idcard }} ">
                            @error('idcard')
                            <span style="color:red;"> {{ $message }}</span> 
                         @enderror
                            {{-- <input type="file" class="form-control" name="idcard" value=""> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="mb-3">
                            <label for="langSelect" class="form-label">Fees Information  </label>
                            {{-- <input type="text" name="fees_information" id ="fees_information" value=""> --}}
                            <select class="form-control" id="fees_information" name="fees_information">
                                <option value="">Select</option>
                                <option value="monthly">Monthly</option>
                                <option value="quarterly">Quarterly </option>
                                <option value="half_yearly">Half Yearly</option>
                                <option value="yearly">Yearly </option>
                            </select>
                            @error('fees_information')
                          <span style="color:red;"> {{ $message }}</span> 
                       @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="mb-3">
                            <label for="langSelect" class="form-label">Fees  </label>
                             <input type="text" class="form-control" name="fees" id ="fees">
                           
                            @error('fees')
                          <span style="color:red;"> {{ $message }}</span> 
                       @enderror
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