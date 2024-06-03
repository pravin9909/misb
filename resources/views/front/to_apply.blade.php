@extends('layouts.masters')
@section('content')
<div class="page-title-area bg-27">
    <div class="container">
        <div class="page-title-content">
            <h2>Postuler</h2>

            <ul>
                <li>
                    <a href="index.php">
                        Accueil
                    </a>
                </li>

                <li class="active">Postuler</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Candidates Resume Area -->

<!-- Start Candidates Resume Area -->
<section class="candidates-resume-area ptb-100">
    <div class="container">
        <div class="candidates-resume-content">
            <form class="resume-info" method="post" action=" {{ url('/to-apply') }} " enctype="multipart/form-data">
                @csrf
                <h3>Renseignements personnels</h3>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Nom *</label>
                            <input type="text" class="form-control" name="familyName" value="{{ old( 'familyName' )}}" required>
                            @error('familyName')
                                <span style="color:red"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Prenom *</label>
                            <input type="text" class="form-control" name="firstName" value="{{ old( 'firstName' )}}" required>
                            @error('firstName')
                            <span style="color:red"> {{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>N° Passport *</label>
                            <input type="text" class="form-control" name="passportNumber" value="{{ old( 'passportNumber' )}}" required>
                            @error('passportNumber')
                            <span style="color:red"> {{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Téléphone *</label>
                            <input type="text" class="form-control" name="telephone" value="{{ old( 'telephone' )}}" required>
                            @error('telephone')
                            <span style="color:red"> {{ $message }}</span>
                        @enderror
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Courrier *</label>
                            <input type="email" class="form-control" name="email" value="{{ old( 'email' )}}" required>
                            @error('email')
                            <span style="color:red"> {{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Adresse *</label>
                            <input type="text" class="form-control" name="address" value="{{ old( 'address' )}}" required>
                            @error('address')
                            <span style="color:red"> {{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Ville *</label>
                            <input type="text" class="form-control" name="city" value="{{ old('city' )}}" required>
                            @error('city')
                            <span style="color:red"> {{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Code Postale *</label>
                            <input type="text" class="form-control" name="zipcode" value="{{ old( 'zipcode' )}}" required>
                            @error('zipcode')
                            <span style="color:red"> {{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Date de Naissance *</label>
                            <input type="date" class="form-control" name="dob" value="{{ old( 'dob' )}}" required>
                            @error('dob')
                            <span style="color:red"> {{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Nationalité *</label>
                            <input type="text" class="form-control" name="nationality" value="{{ old( 'nationality' )}}" required>
                            @error('nationality')
                            <span style="color:red"> {{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                </div>
                <h3>Derniers détails académiques *</h3>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Nom de l'établissement *</label>
                            <input type="text" class="form-control" name="qualification" value="{{ old( 'qualification' )}}" required>
                            @error('qualification')
                            <span style="color:red"> {{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Diplôme obtenu, ou niveau d'études *</label>
                            <input class="form-control" type="text" name="School" value="{{ old( 'School' )}}" required>
                            @error('School')
                            <span style="color:red"> {{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Niveau de langue française *</label>
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
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Niveau d'anglais *</label>
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
                    <h3>Sélection du programme</h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Année scolaire d'inscription *</label>
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
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Pays de résidence *</label>
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
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Sélectionner les programmes *</label>
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
                        <div class="col-lg-6 col-md-6" style="display:none" id="langProgram">
                                <div class="form-group">
                                    <label>Langue *</label>
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
                        <div class="col-lg-6 col-md-6" id="bbsProgram" style="display:none">
                            <div class="form-group">
                                <label>BBS Programmes *</label>
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
                        <div class="col-lg-6 col-md-6" id="mbaProgram" style="display:none">
                            <div class="form-group">
                                <label>MBA Programmes *</label>
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
                        <div class="col-lg-6 col-md-6" id="dbaProgram" style="display:none">
                            <div class="form-group">
                                <label>DBA Programmes *</label>
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
                        <div class="col-lg-6 col-md-6" id="agent" style="display:none;">
                            <div class="form-group">
                                <label>Référence (Sinon, veuillez marquer NA.) *</label>
                                <input type="text" name="agent" id="agent_inner" class="form-control">
                                @error('agent')
                                <span style="color:red"> {{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6" id="moi" style="display:none;">
                            <div class="form-group">
                                <label>Certificat de Compétence Linguistique (MOI) (IELTS, TOFELS, DELF ou DALF)
                                    *</label>
                                <input type="file" class="form-control"  id="moi_inner" name="moi">
                                @error('moi')
                                <span style="color:red"> {{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6" id="motivational_letter" style="display:none;">
                            <div class="form-group">
                                <label>Motivational Letter *</label>
                                <input type="file" name="motivational_letter" id="motivational_letter_inner" class="form-control">
                                @error('motivational_letter')
                                <span style="color:red"> {{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6" id="curriculum_vitae" style="display:none;">
                            <div class="form-group">
                                <label>CV *</label>
                                <input type="file" name="curriculum_vitae" id="curriculum_vitae_inner" class="form-control">
                                @error('curriculum_vitae')
                                <span style="color:red"> {{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                      
                        <div class="col-lg-6 col-md-6" id="titre">
                            <div class="form-group">
                                <label for="img">Titre de séjour / Visa *</label>
                                <input type="file" class="form-control" name="visa" id="titre_inner" required>
                                @error('visa')
                                <span style="color:red"> {{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="img">Copie du dernier diplôme *</label>
                                <input type="file" class="form-control" name="diploma" required>
                                @error('diploma')
                                <span style="color:red"> {{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="img">Une photo d’identité *</label>
                                <input type="file" class="form-control" name="passportsize" required>
                                @error('passportsize')
                                <span style="color:red"> {{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="img">Votre Passport *</label>
                                <input type="file" class="form-control" name="idcard" required>
                                @error('idcard')
                                <span style="color:red"> {{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group checkboxs">
                                <input type="checkbox" name="termsAccpet" required>
                                <a href="{{url('/admission-policy')}}" target="_blank"
                                    style="margin-left:4px; color:red;">J'ai lu et j'accepte les termes et
                                    conditions.</a>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <button type="submit" name="submitForm" id="submitForm" class="default-btn">
                                Déposer une Demande
                                <i class="ri-arrow-right-line"></i>
                            </button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</section>
@endsection
@section('script')
<script>
  function callProgram(Prog) {
        if (Prog == 'bbs') {
            document.getElementById("bbsProgram").style.display = 'block';
            document.getElementById("langProgram").style.display = 'block';
            document.getElementById("bbsProgramSelect").setAttribute('required', 'required');
           document.getElementById("mbaProgramSelect").removeAttribute('required');
           document.getElementById("dbaProgramSelect").removeAttribute('required');
            document.getElementById("langProgramSelect").setAttribute('required', 'required');
            document.getElementById("mbaProgram").style.display = 'none';
            document.getElementById("dbaProgram").style.display = 'none';
            document.getElementById("tempprogramSelected").style.display = "none";
        }
        if (Prog == 'mba') {
            document.getElementById("bbsProgram").style.display = 'none';
            document.getElementById("mbaProgram").style.display = 'block';
            document.getElementById("langProgram").style.display = 'block';
            document.getElementById("mbaProgramSelect").setAttribute('required','required');
             document.getElementById("bbsProgramSelect").removeAttribute('required');
            document.getElementById("dbaProgramSelect").removeAttribute('required');
            document.getElementById("langProgramSelect").setAttribute('required','required');
            document.getElementById("dbaProgram").style.display = 'none';
            document.getElementById("tempprogramSelected").style.display = "none";
        }
        if (Prog == 'dba') {
            document.getElementById("bbsProgram").style.display = 'none';
            document.getElementById("mbaProgram").style.display = 'none';
            document.getElementById("dbaProgram").style.display = 'block';
            document.getElementById("langProgram").style.display = 'block';
            document.getElementById("dbaProgramSelect").setAttribute('required', 'required');
            document.getElementById("mbaProgramSelect").removeAttribute('required');
            document.getElementById("bbsProgramSelect").removeAttribute('required');
            document.getElementById("langProgramSelect").setAttribute('required', 'required');
            document.getElementById("tempprogramSelected").style.display = "none";
        }
        if (Prog == '') {
            document.getElementById("bbsProgram").style.display = 'none';
            document.getElementById("mbaProgram").style.display = 'none';
            document.getElementById("dbaProgram").style.display = 'none';
            document.getElementById("langProgram").style.display = 'none';
            document.getElementById("tempprogramSelected").style.display = "block";
            document.getElementById("bbsProgramSelect").removeAttribute('required');
            document.getElementById("dbaProgramSelect").removeAttribute('required');
            document.getElementById("mbaProgramSelect").removeAttribute('required');
           
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

    $("#checkOTP").click(function() {
        if ($("#otp").val() == '6357') {
            //alert('OTP Valid');
            $("#textBox").hide();
            $("#msgBox").html(
                "Merci d'avoir déposé votre candidature. Nous reviendrons vers vous très prochainement. <br><br>Thank you for submitting your Application! We will get back to you very soon"
                );
            $.ajax({
                type: "POST",
                url: "/submissionEmail.php",
                data: {
                    id: $("#lastId").val(), // < note use of 'this' here
                },
                success: function(result) {
                    // alert(result);
                },
                error: function(result) {
                    // alert('error');
                }
            });
        } else {
            $("#otpRemark").show();
        }
    });

</script>
@endsection