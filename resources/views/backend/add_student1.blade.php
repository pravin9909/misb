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
<form class="resume-info" method="post" action=" {{ route('add-student.store1') }} " enctype="multipart/form-data">
    @csrf
    <h3>Renseignements personnels</h3>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Family Name *</label>
                <input type="text" class="form-control" name="familyName" value="{{ old( 'familyName' )}}" required>
                @error('familyName')
                    <span style="color:red"> {{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">First Name *</label>
                <input type="text" class="form-control" name="firstName" value="{{ old( 'firstName' )}}" required>
                @error('firstName')
                <span style="color:red"> {{ $message }}</span>
            @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Passport Number *</label>
                <input type="text" class="form-control" name="passportNumber" value="{{ old( 'passportNumber' )}}" required>
                @error('passportNumber')
                <span style="color:red"> {{ $message }}</span>
            @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Telephone *</label>
                <input type="text" class="form-control" name="telephone" value="{{ old( 'telephone' )}}" required>
                @error('telephone')
                <span style="color:red"> {{ $message }}</span>
            @enderror
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Email *</label>
                <input type="email" class="form-control" name="email" value="{{ old( 'email' )}}" required>
                @error('email')
                <span style="color:red"> {{ $message }}</span>
            @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-label">
                <label class="form-label">Address *</label>
                <input type="text" class="form-control" name="address" value="{{ old( 'address' )}}" required>
                @error('address')
                <span style="color:red"> {{ $message }}</span>
            @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-label">
                <label class="form-label">City *</label>
                <input type="text" class="form-control" name="city" value="{{ old('city' )}}" required>
                @error('city')
                <span style="color:red"> {{ $message }}</span>
            @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-label">
                <label class="form-label">Zip Code *</label>
                <input type="text" class="form-control" name="zipcode" value="{{ old( 'zipcode' )}}" required>
                @error('zipcode')
                <span style="color:red"> {{ $message }}</span>
            @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-label">
                <label class="form-label">DoB *</label>
                <input type="date" class="form-control" name="dob" value="{{ old( 'dob' )}}" required>
                @error('dob')
                <span style="color:red"> {{ $message }}</span>
            @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-label">
                <label class="form-label">Nationality *</label>
                <input type="text" class="form-control" name="nationality" value="{{ old( 'nationality' )}}" required>
                @error('nationality')
                <span style="color:red"> {{ $message }}</span>
            @enderror
            </div>
        </div>
    </div>
    <h3>Latest academic details *</h3>
    <div class="row">
        <div class="col-md-6">
            <div class="form-label">
                <label class="form-label">Qualification *</label>
                <input type="text" class="form-control" name="qualification" value="{{ old( 'qualification' )}}" required>
                @error('qualification')
                <span style="color:red"> {{ $message }}</span>
            @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-label">
                <label class="form-label">School *</label>
                <input class="form-control" type="text" name="school" value="{{ old( 'school' )}}" required>
                @error('school')
                <span style="color:red"> {{ $message }}</span>
            @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-label">
                <label class="form-label">Level French *</label>
                <select class="form-control" name="level_french" required>
                    <option value="">Sélectionner</option>
                    <option value="A0">A0</option>
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="B1">B1</option>
                    <option value="B2">B2</option>
                    <option value="C1">C1</option>
                    <option value="C2">C2</option>
                </select>
                @error('level_french')
                <span style="color:red"> {{ $message }}</span>
            @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-label">
                <label class="form-label">Level English *</label>
                <select class="form-control" name="level_english" required>
                    <option value="">Sélectionner</option>
                    <option value="A0">A0</option>
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="B1">B1</option>
                    <option value="B2">B2</option>
                    <option value="C1">C1</option>
                    <option value="C2">C2</option>
                </select>
                @error('level_english')
                <span style="color:red"> {{ $message }}</span>
            @enderror
            </div>
        </div>
        <h3>Program selection</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-label">
                        <label class="form-label">Intake Year *</label>
                        <select class="form-control" name="intake_year" required>
                            <option value="">Sélectionner une date</option>
                                <option value="Février 2024-2025">Février 2024-2025</option>
                                <option value="Mai 2024-2025">Mai 2024-2025</option>
                                <option value="Septembre 2024-2025">Septembre 2024-2025</option>
                        </select>
                        @error('intake_year')
                        <span style="color:red"> {{ $message }}</span>
                    @enderror
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-label">
                    <div class="form-group">
                        <label class="form-label">Residence *</label>
                        <select class="form-control" name="pay_de_residence" onChange="callOrigin(this.value)" required>
                            <option value="Resident_Français_étudiant">Resident Français étudiant
                            </option>
                            <option value="Européen">Européen</option>
                            <option value="Non Européen">Non Européen</option>
                        </select>
                        @error('pay_de_residence')
                        <span style="color:red"> {{ $message }}</span>
                    @enderror
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-6" style="display: none" id="reference">
                <div class="form-label">
                    <div class="form-group">
                        <label class="form-label">Reference *</label>
                     <input type="text" class="form-control" name="reference">
                        @error('reference')
                        <span style="color:red"> {{ $message }}</span>
                    @enderror
                    </div>
                </div>
            </div> --}}
                <div class="col-md-6">
                    <div class="form-label">
                        <label class="form-label">Select Programme *</label>
                        <select class="form-control" id="programSelect" name="programSelect"
                            onchange="callProgram(this.value);" required>
                            <option value="">Sélectionnez les programmes</option>
                            <option value="bbs">BBS Programmes</option>
                            <option value="mba">MBA Programmes </option>
                            <option value="dba">DBA Programmes</option>
                        </select>
                        @error('programSelect')
                        <span style="color:red"> {{ $message }}</span>
                    @enderror
                    </div>
                </div>
            <div class="col-md-6" style="display:none" id="langProgram">
                    <div class="form-label">
                        <label class="form-label">Language *</label>
                        <select class="form-control" id="langProgramSelect" name="langSelect">
                            <option value="">Sélectionnez les Langue</option>
                            <option value="Anglais">Anglais</option>
                            <option value="Français">Français </option>
                        </select>
                        @error('langSelect')
                        <span style="color:red"> {{ $message }}</span>
                    @enderror
                    </div>
                </div>
            <input type="hidden" name="programSelected" id="tempprogramSelected" value="">
            <div class="col-md-6" id="bbsProgram" style="display:none">
                <div class="form-label">
                    <label class="form-label">BBS Programmes *</label>
                    <select class="form-control" name="programSelected" id="bbsProgramSelect">
                        <option value="">Sélectionnez les programmes</option>
                        <option value="Gestion des affaires internationales">Gestion des affaires
                            internationales</option>
                        <option value="Management et Gestion hôtelière">Management et Gestion hôtelière
                        </option>
                        <option value="Création d'entreprise et entrepreneuriat">Création d'entreprise
                            et entrepreneuriat</option>
                        <option value="Marketing international">Marketing international </option>
                        <option value="Tourisme & Culture">Tourisme & Culture</option>
                        <option value="Management du luxe">Management du luxe</option>
                    </select>
                 
                </div>
            </div>
            <div class="col-md-6" id="mbaProgram" style="display:none">
                <div class="form-label">
                    <label class="form-label">MBA Programmes *</label>
                    <select class="form-control" name="programSelected" id="mbaProgramSelect">
                        <option value="">Sélectionnez les programmes</option>
                        <option value="Gestion des affaires internationales">Gestion des affaires
                            internationales</option>
                        <option value="Management et Gestion hôtelière">Management et Gestion hôtelière
                        </option>
                        <option value="Création d'entreprise et entrepreneuriat">Création d'entreprise
                            et entrepreneuriat</option>
                        <option value="Marketing international">Marketing international</option>
                        <option value="Tourisme & Culture">Tourisme & Culture</option>
                        <option value="Management du luxe">Management du luxe</option>
                    </select>
                
                </div>
            </div>
            <div class="col-md-6" id="dbaProgram" style="display:none">
                <div class="form-label">
                    <label class="form-label">DBA Programmes *</label>
                    <select class="form-control" name="programSelected" id="dbaProgramSelect">
                        <option value="">Sélectionnez les programmes</option>
                        <option value="Management et création d'entreprise">Management et création
                            d'entreprise</option>
                        <option value="Management et Gestion hôtelière">Management et Gestion hôtelière
                        </option>
                        <option value="Marketing digital et Nouvelles technologies">Marketing digital et
                            Nouvelles technologies</option>
                        <option value="Tourisme & Culture">Tourisme & Culture</option>
                        <option value="Développement économique, durable, local et international">
                            Développement économique, durable, local et international</option>
                        <option value="Management du Luxe">Management du Luxe</option>
                    </select>
                    @error('tempprogramSelected')
                    <span style="color:red"> {{ $message }}</span>
                @enderror
                </div>
            </div>
            <div class="col-md-6" id="agent" style="display:none;">
                <div class="form-label">
                    <label class="form-label">Reference *</label>
                    <input type="text" name="agent" id="agent_inner" class="form-control">
                    @error('agent')
                    <span style="color:red"> {{ $message }}</span>
                @enderror
                </div>
            </div>
            <div class="col-md-6" id="moi" style="display:none;">
                <div class="form-label">
                    <label class="form-label">MoI
                        *</label>
                    <input type="file" class="form-control"  id="moi_inner" name="moi">
                    @error('moi')
                    <span style="color:red"> {{ $message }}</span>
                @enderror
                </div>
            </div>
            <div class="col-md-6" id="motivational_letter" style="display:none;">
                <div class="form-label">
                    <label class="form-label">Motivational Letter *</label>
                    <input type="file" name="motivational_letter" id="motivational_letter_inner" class="form-control">
                    @error('motivational_letter')
                    <span style="color:red"> {{ $message }}</span>
                @enderror
                </div>
            </div>
            <div class="col-md-6" id="curriculum_vitae" style="display:none;">
                <div class="form-label">
                    <label class="form-label">CV *</label>
                    <input type="file" name="curriculum_vitae" id="curriculum_vitae_inner" class="form-control">
                    @error('curriculum_vitae')
                    <span style="color:red"> {{ $message }}</span>
                @enderror
                </div>
            </div>
          
            <div class="col-md-6" id="titre">
                <div class="form-label">
                    <label for="img">Visa *</label>
                    <input type="file" class="form-control" name="visa" id="titre_inner" value="">
                    @error('visa')
                    <span style="color:red"> {{ $message }}</span>
                @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-label">
                    <label for="diploma">Diploma *</label>
                    <input type="file" class="form-control" name="diploma" id="diploma" required>
                    @error('diploma')
                    <span style="color:red"> {{ $message }}</span>
                @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-label">
                    <label for="passportsize">Passport*</label>
                    <input type="file" class="form-control" name="passportsize" id ="passportsize" required>
                    @error('passportsize')
                    <span style="color:red"> {{ $message }}</span>
                @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-label">
                    <label for="idcard">ID Card *</label>
                    <input type="file" class="form-control" name="idcard" id="idcard" required>
                    @error('idcard')
                    <span style="color:red"> {{ $message }}</span>
                @enderror
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="mb-3">
                    <label for="total_fees" class="form-label">Total Fees  </label>
                     <input type="text" class="form-control" name="total_fees" id ="total_fees" required>
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
                     <input type="text" class="form-control" name="balance_fees" id ="balance_fees" readonly required >
                    @error('balance_fees')
                  <span style="color:red;"> {{ $message }}</span> 
               @enderror
                </div>
            </div>
            {{-- <div class="col-lg-12 col-md-12">
                <div class="form-group checkboxs">
                    <input type="checkbox" name="termsAccpet" required>
                    <a href="{{url('/admission-policy')}}" target="_blank"
                        style="margin-left:4px; color:red;">J'ai lu et j'accepte les termes et
                        conditions.</a>
                </div>
            </div> --}}

            <div class="col-lg-12">
                <button type="submit" name="submitForm" id="submitForm" class="btn btn-primary">
                    Submit
                    <i class="ri-arrow-right-line"></i>
                </button>
            </div>
        </div>
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
    function callProgram(Prog) {
          if (Prog == 'bbs') {
              document.getElementById("bbsProgram").style.display = 'block';
              document.getElementById("langProgram").style.display = 'block';
              document.getElementById("bbsProgramSelect").setAttribute('required', '');
              document.getElementById("langProgramSelect").setAttribute('required', '');
              document.getElementById("mbaProgram").style.display = 'none';
              document.getElementById("dbaProgram").style.display = 'none';
              document.getElementById("tempprogramSelected").style.display = "none";
          }
          if (Prog == 'mba') {
              document.getElementById("bbsProgram").style.display = 'none';
              document.getElementById("mbaProgram").style.display = 'block';
              document.getElementById("langProgram").style.display = 'block';
              document.getElementById("mbaProgramSelect").setAttribute('required', '');
              document.getElementById("langProgramSelect").setAttribute('required', '');
              document.getElementById("dbaProgram").style.display = 'none';
              document.getElementById("tempprogramSelected").style.display = "none";
          }
          if (Prog == 'dba') {
              document.getElementById("bbsProgram").style.display = 'none';
              document.getElementById("mbaProgram").style.display = 'none';
              document.getElementById("dbaProgram").style.display = 'block';
              document.getElementById("langProgram").style.display = 'block';
              document.getElementById("dbaProgramSelect").setAttribute('required', '');
              document.getElementById("langProgramSelect").setAttribute('required', '');
              document.getElementById("tempprogramSelected").style.display = "none";
          }
          if (Prog == '') {
              document.getElementById("bbsProgram").style.display = 'none';
              document.getElementById("mbaProgram").style.display = 'none';
              document.getElementById("dbaProgram").style.display = 'none';
              document.getElementById("langProgram").style.display = 'none';
              document.getElementById("tempprogramSelected").style.display = "block";
          }
      }
  
  $("#bbsProgramSelect").change(function() {
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
  
  function callOrigin(orig) {
      var moi = document.getElementsByName("moi")[0];
  var motivational_letter = document.getElementsByName("motivational_letter")[0];
  var curriculum_vitae = document.getElementsByName("curriculum_vitae")[0];
  var visa = document.getElementsByName("visa")[0];
  
  if (orig == 'Resident_Français_étudiant') {
      document.getElementById("moi").style.display = 'none';
      document.getElementById("moi_inner").removeAttribute('required');
      document.getElementById("motivational_letter").style.display = 'none';
      document.getElementById("motivational_letter_inner").removeAttribute('required');
      document.getElementById("agent").style.display = 'none';
      document.getElementById("agent_inner").removeAttribute('required');
      document.getElementById("curriculum_vitae").style.display = 'none';
      document.getElementById("curriculum_vitae_inner").removeAttribute('required');
      document.getElementById("titre").style.display = 'block';
      document.getElementById("titre_inner").setAttribute('required', '');
  
      // Reset the values
      if (moi) moi.value = '';
      if (motivational_letter) motivational_letter.value = '';
      if (curriculum_vitae) curriculum_vitae.value = '';
  } else {
      document.getElementById("moi").style.display = 'block';
      document.getElementById("moi_inner").setAttribute('required', '');
      document.getElementById("motivational_letter").style.display = 'block';
      document.getElementById("motivational_letter_inner").setAttribute('required', '');
      document.getElementById("agent").style.display = 'block';
      document.getElementById("agent_inner").setAttribute('required', '');
      document.getElementById("curriculum_vitae").style.display = 'block';
      document.getElementById("curriculum_vitae_inner").setAttribute('required', '');
      document.getElementById("titre").style.display = 'none';
      document.getElementById("titre_inner").removeAttribute('required');
  
      // Reset the value
      if (visa) visa.value = '';
  }
  }
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
@endsection