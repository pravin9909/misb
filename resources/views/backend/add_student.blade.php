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
            <form action="{{ route('create-student.store')}}" method="post" enctype="multipart/form-data">
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
                            <input type="hidden" class="form-control"  id="application_id" name="application_id" value=" {{ $createStudent->id }} ">
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
                            <input type="date" class="form-control" name="dob" value="{{ \Carbon\Carbon::parse($createStudent->dob)->format('Y-m-d') }}" required>
                            {{-- <input type="dob" class="form-control"  id="dob" name="dob" value="  "> --}}
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
                            {{-- <input type="text" class="form-control" class="form-control" name="level_french" id ="level_french" value=" {{ $createStudent->level_french }} "> --}}
                            <select class="form-control" name="level_french"  required>
                                <option value="">Sélectionner</option>
                                <option value="A0" {{ $createStudent->level_french == "A0" ? "selected":"" }} >A0</option>
                                <option value="A1" {{ $createStudent->level_french == "A1" ? "selected":"" }}>A1</option>
                                <option value="A2" {{ $createStudent->level_french == "A2" ? "selected":"" }}>A2</option>
                                <option value="B1" {{ $createStudent->level_french == "B1" ? "selected":"" }}>B1</option>
                                <option value="B2" {{ $createStudent->level_french == "B2" ? "selected":"" }}>B2</option>
                                <option value="C1" {{ $createStudent->level_french == "C1" ? "selected":"" }}>C1</option>
                                <option value="C2" {{ $createStudent->level_french == "C2" ? "selected":"" }}>C2</option>
                            </select>
                            @error('level_french')
                            <span style="color:red;"> {{ $message }}</span> 
                         @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="mb-3">
                            <label for="level_english" class="form-label">English level </label>
                            {{-- <input type="text" class="form-control" class="form-control" name="level_english" id ="level_english" value=" {{ $createStudent->level_english }} "> --}}
                            <select class="form-control" name="level_english" required>
                                <option value="">Sélectionner</option>
                                <option value="A0" {{ $createStudent->level_english == "A0" ? "selected":"" }}>A0</option>
                                <option value="A1" {{ $createStudent->level_english == "A1" ? "selected":"" }}>A1</option>
                                <option value="A2" {{ $createStudent->level_english == "A2" ? "selected":"" }}>A2</option>
                                <option value="B1" {{ $createStudent->level_english == "B1" ? "selected":"" }}>B1</option>
                                <option value="B2" {{ $createStudent->level_english == "B2" ? "selected":"" }}>B2</option>
                                <option value="C1" {{ $createStudent->level_english == "C1" ? "selected":"" }}>C1</option>
                                <option value="C2"{{ $createStudent->level_english == "C2" ? "selected":"" }}>C2</option>
                            </select>
                            @error('level_english')
                            <span style="color:red;"> {{ $message }}</span> 
                         @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="mb-3">
                            <label for="intake_year" class="form-label">School year of registration </label>
                            {{-- <input type="text" class="form-control" name="intake_year" id ="intake_year" value=" {{ $createStudent->intake_year }} "> --}}
                            <select class="form-control" name="intake_year" required>
                                <option value="">Sélectionner une date</option>
                            
                                    <option value="Février 2024-2025" {{ $createStudent->intake_year == "Février 2024-2025" ? "selected":"" }}>Février 2024-2025</option>
                                    <option value="Mai 2024-2025" {{ $createStudent->intake_year == "Mai 2024-2025" ? "selected":"" }}>Mai 2024-2025</option>
                                    <option value="Septembre 2024-2025" {{ $createStudent->intake_year == "Septembre 2024-2025" ? "selected":"" }}>Septembre 2024-2025</option>
                            </select>
                            @error('intake_year')
                            <span style="color:red;"> {{ $message }}</span> 
                         @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="mb-3">
                            <label for="pay_de_residence" class="form-label">Country of Residence </label>
                            {{-- <input type="text" class="form-control" name="pay_de_residence" id ="pay_de_residence" value=" {{ $createStudent->pay_de_residence }} "> --}}
                            <select class="form-control" name="pay_de_residence"
                                        onChange="callOrigin(this.value)" required>
                                        <option value="Resident_Français_étudiant" {{ $createStudent->pay_de_residence == "Resident_Français_étudiant" ? "selected":"" }}>Resident Français étudiant</option>
                                        <option value="Européen" {{ $createStudent->pay_de_residence == "Européen" ? "selected":"" }}>Européen</option>
                                        <option value="Non Européen" {{ $createStudent->pay_de_residence == "Non Européen" ? "selected":"" }}>Non Européen</option>
                                    </select>
                                    @error('pay_de_residence')
                            <span style="color:red;"> {{ $message }}</span> 
                         @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="mb-3">
                            <label for="programSelect" class="form-label">Select programs  </label>
                            {{-- <input type="text" class="form-control" name="programSelect" id ="programSelect" value=" {{ $createStudent->programSelect }} "> --}}
                            <select class="form-control" id="programSelect" name="programSelect" onchange="callProgram(this.value);">
                            <option value="">Sélectionnez les programmes</option>
                            <option value="bbs" {{ $createStudent->programSelect == "bbs" ? "selected":"" }}>BBS Programmes</option>
                            <option value="mba" {{ $createStudent->programSelect == "mba" ? "selected":"" }}>MBA Programmes </option>
                            <option value="dba" {{ $createStudent->programSelect == "dba" ? "selected":"" }}>DBA Programmes</option>
                        </select>
                        @error('programSelect')
                        <span style="color:red;"> {{ $message }}</span> 
                     @enderror
                        </div>
                    </div>
                    <div class="col-lg-6" id="programSelected_old_div">
                        <div class="mb-3">
                            <label for="programSelected_old" class="form-label">Select sub programs  </label>
                            <input type="text" class="form-control" id="programSelected_old" name="programSelected_old" value="{{$createStudent->programSelected}}">
                        </div>
                    </div>
                     {{-- <div class="col-lg-6 ">
                        <div class="mb-3">
                            <label id="programSelected" class="form-label">Programs  </label>
                          <input type="text" class="form-control" name="programSelected" id="tempprogramSelected" value=" {{ $createStudent->programSelected }} ">
                         <input type="hidden" name="programSelected" id="tempprogramSelected" value=""> 
                         
                         </div>
                    </div>  --}} 
                    {{-- <input type="hidden" name="programSelected" id="tempprogramSelected" value=""> --}}
                    <div class="col-lg-6 col-md-6" id="bbsProgram" style="display:none">
                        <div class="form-group">
                            <label>BBS Programmes *</label>
                            <select class="form-control" name="programSelected" id="bbsProgramSelect">
                                <option value="">Sélectionnez les programmes</option>
                                <option value="Gestion des affaires internationales" {{ $createStudent->programSelected == "Gestion des affaires internationales" ? "selected":"" }}>Gestion des affaires
                                    internationales</option>
                                <option value="Management et Gestion hôtelière" {{ $createStudent->programSelected == "Management et Gestion hôtelière" ? "selected":"" }}>Management et Gestion hôtelière
                                </option>
                                <option value="Création d'entreprise et entrepreneuriat" {{ $createStudent->programSelected == "Création d'entreprise et entrepreneuriat" ? "selected":"" }}>Création d'entreprise
                                    et entrepreneuriat</option>
                                <option value="Marketing international" {{ $createStudent->programSelected == "Marketing international" ? "selected":"" }}>Marketing international </option>
                                <option value="Tourisme & Culture" {{ $createStudent->programSelected == "Tourisme & Culture" ? "selected":"" }}>Tourisme & Culture</option>
                                <option value="Management du luxe" {{ $createStudent->programSelected == "Management du luxe" ? "selected":"" }}>Management du luxe</option>
                            </select>
                         
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" id="mbaProgram" style="display:none">
                        <div class="form-group">
                            <label>MBA Programmes *</label>
                            <select class="form-control" name="programSelected" id="mbaProgramSelect">
                                <option value="">Sélectionnez les programmes</option>
                                <option value="Gestion des affaires internationales" {{ $createStudent->programSelected == "Gestion des affaires internationales" ? "selected":"" }}>Gestion des affaires
                                    internationales</option>
                                <option value="Management et Gestion hôtelière" {{ $createStudent->programSelected == "Management et Gestion hôtelière" ? "selected":"" }}>Management et Gestion hôtelière
                                </option>
                                <option value="Création d'entreprise et entrepreneuriat" {{ $createStudent->programSelected == "Création d'entreprise et entrepreneuriat" ? "selected":"" }}>Création d'entreprise
                                    et entrepreneuriat</option>
                                <option value="Marketing international" {{ $createStudent->programSelected == "Marketing international" ? "selected":"" }}>Marketing international</option>
                                <option value="Tourisme & Culture" {{ $createStudent->programSelected == "Tourisme & Culture" ? "selected":"" }}>Tourisme & Culture</option>
                                <option value="Management du luxe" {{ $createStudent->programSelected == "Management du luxe" ? "selected":"" }}>Management du luxe</option>
                            </select>
                        
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" id="dbaProgram" style="display:none">
                        <div class="form-group">
                            <label>DBA Programmes *</label>
                            <select class="form-control" name="programSelected" id="dbaProgramSelect">
                                <option value="">Sélectionnez les programmes</option>
                                <option value="Management et création d'entreprise" {{ $createStudent->programSelected == "Management et création d'entreprise" ? "selected":"" }}>Management et création
                                    d'entreprise</option>
                                <option value="Management et Gestion hôtelière" {{ $createStudent->programSelected == "Management et Gestion hôtelière" ? "selected":"" }}>Management et Gestion hôtelière
                                </option>
                                <option value="Marketing digital et Nouvelles technologies" {{ $createStudent->programSelected == "Marketing digital et Nouvelles technologies" ? "selected":"" }}>Marketing digital et
                                    Nouvelles technologies</option>
                                <option value="Tourisme & Culture" {{ $createStudent->programSelected == "Tourisme & Culture" ? "selected":"" }}>Tourisme & Culture</option>
                                <option value="Développement économique, durable, local et international" {{ $createStudent->programSelected == "Développement économique, durable, local et international" ? "selected":"" }}>
                                    Développement économique, durable, local et international</option>
                                <option value="Management du Luxe" {{ $createStudent->programSelected == "Management du Luxe" ? "selected":"" }}>Management du Luxe</option>
                            </select>
                            @error('tempprogramSelected')
                            <span style="color:red"> {{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="mb-3">
                            <label for="langSelect" class="form-label">Language  </label>
                            {{-- <input type="text" class="form-control" name="langSelect" id ="langSelect" value=" {{ $createStudent->langSelect }} "> --}}
                            <select class="form-control" id="langProgramSelect" name="langSelect" required>
                                <option value="">Sélectionnez les Langue</option>
                                <option value="Anglais" {{ $createStudent->langSelect == "Anglais" ? "selected":"" }}>Anglais</option>
                                <option value="Français" {{ $createStudent->langSelect == "Français" ? "selected":"" }}>Français </option>
                            </select>
                            @error('langSelect')
                          <span style="color:red;"> {{ $message }}</span> 
                       @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="mb-3">
                            <label for="agent" class="form-label">Référence (Sinon, veuillez marquer NA.) *</label>
                                <input type="text" class="form-control" id="agent" name="agent" class="form-control" value=" {{ $createStudent->agent }} " required>
                                @error('agent')
                                <span style="color:red;"> {{ $message }}</span> 
                             @enderror
                        </div>
                    </div>
                 
                    <div class="col-lg-6 ">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="mb-3">
                                    <label for="moi" class="form-label">Certificat de Compétence Linguistique (MOI) (IELTS, TOFELS, DELF ou DALF)
                                        </label>
                                        <input type="file" name="moi" id="moi_inner" class="form-control" >
                                    <input type="hidden" class="form-control"  name="moi_old" value="{{$createStudent->moi}}">
                                    @error('moi')
                                    <span style="color:red;"> {{ $message }}</span> 
                                 @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <br>
                                <br>
                                <a href="{{ asset('/assets/application/moi')}}/{{$createStudent->moi}}" download="MoI">
                                    <span class="remove_moi"><i class="ri-download-2-fill align-middle me-1"></i>Download</span></a>
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-lg-6 ">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="mb-3">
                                    <label for="moi" class="form-label">Motivational Letter</label>
                                        <input type="file" name="motivational_letter" id="motivational_letter_inner" class="form-control" >
                                    <input type="hidden" class="form-control"  name="motivational_letter_old" value="{{$createStudent->motivational_letter}}">
                                    @error('motivational_letter')
                                    <span style="color:red;"> {{ $message }}</span> 
                                 @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <br>
                                <br>
                                <a href="{{ asset('/assets/application/motivational_letter')}}/{{$createStudent->motivational_letter}}" download="motivational_letter">
                                    <span class="remove_motivational_letter"><i class="ri-download-2-fill align-middle me-1"></i>Download</span></a>
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-lg-6 ">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="mb-3">
                                    <label for="curriculum_vitae_inner" class="form-label">CV</label>
                                        <input type="file" name="curriculum_vitae" id="curriculum_vitae_inner" class="form-control" >
                                    <input type="hidden" class="form-control"  name="curriculum_vitae_old" value="{{$createStudent->curriculum_vitae}}">
                                    @error('cv')
                                    <span style="color:red;"> {{ $message }}</span> 
                                 @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <br>
                                <br>
                                <a href="{{ asset('/assets/application/cv')}}/{{$createStudent->cv}}" download="cv">
                                    <span class="remove_cv"><i class="ri-download-2-fill align-middle me-1"></i>Download</span></a>
                            </div>
                        </div>
                       
                    </div>
                  
                    <div class="col-lg-6 ">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="mb-3">
                                    <label for="img">Titre de séjour / Visa *</label>
                                <input type="file" class="form-control" name="visa" id="titre_inner" value="">
                                    <input type="hidden" class="form-control"  name="visa_old" value="{{$createStudent->visa}}">
                                    @error('visa')
                                    <span style="color:red;"> {{ $message }}</span> 
                                 @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <br>
                                <br>
                                <a href="{{ asset('/assets/application/visa')}}/{{$createStudent->visa}}" download="visa">
                                    <span class="remove_visa"><i class="ri-download-2-fill align-middle me-1"></i>Download</span></a>
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-lg-6 ">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="mb-3">
                                    <label for="diploma">Copie du dernier diplôme *</label>
                                    <input type="file" class="form-control" name="diploma" id="diploma" >
                                    <input type="hidden" class="form-control"  name="diploma_old" value="{{$createStudent->diploma}}">
                                    @error('diploma')
                                    <span style="color:red;"> {{ $message }}</span> 
                                 @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <br>
                                <br>
                                <a href="{{ asset('/assets/application/diploma')}}/{{$createStudent->diploma}}" download="diploma">
                                    <span class="remove_diploma"><i class="ri-download-2-fill align-middle me-1"></i>Download</span></a>
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-lg-6 ">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="mb-3">
                                    <label for="passportsize">Une photo d’identité *</label>
                                    <input type="file" class="form-control" name="passportsize" id ="passportsize" >
                                    <input type="hidden" class="form-control"  name="passportsize_old" value="{{$createStudent->passportsize}}">
                                    @error('passportsize')
                                    <span style="color:red;"> {{ $message }}</span> 
                                 @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <br>
                                <br>
                                <a href="{{ asset('/assets/application/passportsize')}}/{{$createStudent->passportsize}}" download="passportsize">
                                    <span class="remove_passportsize"><i class="ri-download-2-fill align-middle me-1"></i>Download</span></a>
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-lg-6 ">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="mb-3">
                                    <label for="idcard">Votre Passport *</label>
                                    <input type="file" class="form-control" name="idcard" id="idcard" >
                                    <input type="hidden" class="form-control"  name="idcard_old" value="{{$createStudent->idcard}}">
                                    @error('idcard')
                                    <span style="color:red;"> {{ $message }}</span> 
                                 @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <br>
                                <br>
                                <a href="{{ asset('/assets/application/idcard')}}/{{$createStudent->idcard}}" download="idcard">
                                    <span class="remove_idcard>"><i class="ri-download-2-fill align-middle me-1"></i>Download</span></a>
                            </div>
                        </div>
                       
                    </div>
                    {{-- <div class="col-lg-6 ">
                        <div class="mb-3">
                            <label for="langSelect" class="form-label">Fees Information  </label>
                           
                            <select class="form-control" id="fees_information" name="fees_information" required>
                                <option value="">Select</option>
                                <option value="monthly">Monthly</option>
                                <option value="quarterly">Quarterly </option>
                                <option value="half_yearly">Half Yearly</option>
                                <option value="yearly">Yearly </option>
                            </select> --}}
                            {{-- @error('fees_information')
                          <span style="color:red;"> {{ $message }}</span> 
                       @enderror --}}
                        {{-- </div>
                    </div> --}}
                    <div class="col-lg-6 ">
                        <div class="mb-3">
                            <label for="total_fees" class="form-label">Total Fees  </label>
                             <input type="text" class="form-control delete_download" name="total_fees" id ="total_fees" required>
                            @error('total_fees')
                          <span style="color:red;"> {{ $message }}</span> 
                       @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="mb-3">
                            <label for="fees_paid" class="form-label"> Fees Paid </label>
                             <input type="text" class="form-control" name="fees_paid" id ="fees_paid" required>
                            @error('fees_paid')
                          <span style="color:red;"> {{ $message }}</span> 
                       @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="mb-3">
                            <label for="balance_fees" class="form-label">Balance Fees  </label>
                             <input type="text" class="form-control" name="balance_fees" id ="balance_fees" readonly required>
                            @error('balance_fees')
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
@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
{{-- $(document).ready(function()) --}}
<script>
     function callProgram(Prog) {
        if (Prog == 'bbs') {
            document.getElementById("programSelected_old_div").style.display = 'none';
           // document.getElementById("programSelected_old_div").value = '';
            document.getElementById("bbsProgram").style.display = 'block';
            document.getElementById("bbsProgramSelect").setAttribute("name", "programSelected");
            // document.getElementById("langProgram").style.display = 'block';
            document.getElementById("bbsProgramSelect").setAttribute('required', '');
            // document.getElementById("langProgramSelect").setAttribute('required', '');
            document.getElementById("mbaProgram").style.display = 'none';
            document.getElementById("mbaProgramSelect").removeAttribute("name");
            document.getElementById("dbaProgram").style.display = 'none';
            document.getElementById("dbaProgramSelect").removeAttribute("name");
           // document.getElementById("tempprogramSelected").style.display = "none";
        }
        if (Prog == 'mba') {
            document.getElementById("programSelected_old_div").style.display = 'none';
            document.getElementById("bbsProgram").style.display = 'none';
            document.getElementById("mbaProgram").style.display = 'block';
            document.getElementById("mbaProgramSelect").setAttribute("name", "programSelected");
            document.getElementById("bbsProgramSelect").removeAttribute("name");
            // document.getElementById("langProgram").style.display = 'block';
            document.getElementById("mbaProgramSelect").setAttribute('required', '');
            // document.getElementById("langProgramSelect").setAttribute('required', '');
            document.getElementById("dbaProgram").style.display = 'none';
            document.getElementById("dbaProgramSelect").removeAttribute("name");
            //document.getElementById("tempprogramSelected").style.display = "none";
        }
        if (Prog == 'dba') {
            document.getElementById("programSelected_old_div").style.display = 'none';
            document.getElementById("bbsProgram").style.display = 'none';
            document.getElementById("bbsProgramSelect").removeAttribute("name");
            document.getElementById("mbaProgram").style.display = 'none';
            document.getElementById("mbaProgramSelect").removeAttribute("name");
            document.getElementById("dbaProgram").style.display = 'block';
            document.getElementById("dbaProgramSelect").setAttribute("name", "programSelected");
            // document.getElementById("langProgram").style.display = 'block';
            document.getElementById("dbaProgramSelect").setAttribute('required', '');
            // document.getElementById("langProgramSelect").setAttribute('required', '');
            //document.getElementById("tempprogramSelected").style.display = "none";
        }
        if (Prog == '') {
            document.getElementById("bbsProgram").style.display = 'none';
            document.getElementById("mbaProgram").style.display = 'none';
            document.getElementById("dbaProgram").style.display = 'none';
            document.getElementById("langProgram").style.display = 'none';
           // document.getElementById("tempprogramSelected").style.display = "block";
        }
    }

$("#bbsProgramSelect").change(function() {
    alert("mughis");
    $("#tempprogramSelected").val($(this).val());
    $("#tempprogramSelected").attr('name', 'tempprogramSelected');
});
$("#mbaProgramSelect").change(function() {
    $("#tempprogramSelected").val($(this).val());
    $("#tempprogramSelected").attr('name', 'tempprogramSelected');
});
$("#dbaProgramSelect").change(function() {
    $("#tempprogramSelected").val($(this).val());
    $("#tempprogramSelected").attr('name', 'tempprogramSelected');
});
</script>
<script>
  $(document).ready(function() {
    $("#fees_paid").on('keyup', function() {
       // alert("mughis");    
      var total_fees = $("#total_fees").val();
      var fees_paid = $("#fees_paid").val();
      var balance_fees = total_fees - fees_paid;
      console.log("Total Fees: " + total_fees);
      console.log("Fees Paid: " + fees_paid);
      console.log("Balance Fees: " + balance_fees);
       $("#balance_fees").val(balance_fees); 
    });
  });
</script>
<script>
    $(document).ready(function() {
        var visa_old = $("input[name='visa_old']").val();
        var moi_old = $("input[name='moi_old']").val();
        var motivational_letter_old = $("input[name='motivational_letter_old']").val();
        var curriculum_vitae_old = $("input[name='curriculum_vitae_old']").val();
        var diploma_old = $("input[name='diploma_old']").val();
        var passportsize_old = $("input[name='passportsize_old']").val();
        var idcard_old = $("input[name='idcard_old']").val();
        if(visa_old == "") {
$('.remove_visa').css('display','none');
        }
        if(moi_old == "") {
$('.remove_moi').css('display','none');
        }
        if(motivational_letter_old == "") {
$('.remove_motivational_letter').css('display','none');
        }
        if(curriculum_vitae_old == "") {
$('.remove_cv').css('display','none');
        }
        if(diploma_old == "") {
$('.remove_diploma').css('display','none');
        }
        if(passportsize_old == "") {
$('.remove_passportsize').css('display','none');
        }
        if(idcard_old == "") {
$('.remove_idcard').css('display','none');
        }
    })
</script>
@endsection