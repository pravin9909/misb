<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Application;
use Mail;
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
class ToApplyController extends Controller
{
    //
    public function to_apply() {
        return view('front.to_apply');
    }

    public function to_apply_submit(Request $req) {
       // dd($req->all());
        // $familyName = $req->familyName;
        // $firstName = $req->firstName;
//         $req->validate([
// 'familyName' => 'required',
// 'firstName' => 'required',
// 'passportNumber' => 'required',
// 'telephone' => 'required',
// 'email' => 'required',
// 'address' => 'required',
// 'city' => 'required',
// 'zipcode' => 'required',
// 'dob' => 'required',
// 'nationality' => 'required',
// 'qualification' => 'required',
// 'School' => 'required',
// 'level_french' => 'required',
// 'level_english' => 'required',
// 'intake_year' => 'required',
// 'visa' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png,gif,svg|max:2048',
// 'diploma' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png,gif,svg|max:2048',
// 'passportsize' => 'required|file|mimes:pdf,doc,docx,jpeg,jpg,png,gif,svg|max:2048',
// 'idcard' => 'required|file|mimes:pdf,doc,docx,jpeg,jpg,png,gif,svg|max:2048',
//         ]);
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
//$application->programSelected = $req->programSelected;
$application->agent = $req->agent;
// if($req->has('visa')) {
//     $file = $req->file('visa');
//             $extenstion = $file->getClientOriginalExtension();
//             $filenamevisa = time().'.'.$extenstion;
//             $file->move('assets/uploads/application/visa/', $filenamevisa);
//             $application->visa = $filenamevisa;
// }
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
// $application->diploma = $req->diploma;
// $application->passportsize = $req->passportsize;
// $application->idcard = $req->idcard;
$application->save();
$lastInsertedId = $application->id;
$pay_de_residence = $req->pay_de_residence;
//dd($pay_de_residence);
//session()->put('lastInsertedId', $lastInsertedId);
//$rand = rand(111111, 999999);
$email = $application->email;
$data = [
    "subject" => "OTP pour la soumission de votre candidature | MISB",
    "body" => 'Hi, <br><br>
    Afin de vérifier votre adresse électronique, merci d-utiliser le code à usage unique ci-dessous.<br><br>
    Please use below  mentioned OTP to verify your email ID.<br><br>
    <b style="font-size:24px">6357</b><br><br>
    Une fois votre adresse électronique verifiée, vous vous engagez à approuver les termes et conditions mentionnés ci-dessous:<br><br>
    With your email Verifcation; you are approving the below Terms & Conditions:
      <br><br>
      <b> Bienvenue à MASH International  School of Business , Paris, France.</b><br><br>
       À la MASH International  School of Business nous nous engageons à fournir une éducation de qualité et à favoriser un environnement d`apprentissage dynamique pour nos étudiants. Notre politique d`admission garantit à tous les candidats un traitement équitable et transparent. <br><br>
       <b>Veuillez lire attentivement et respecter les directives suivantes :</b><br><br>
       <u>Demande d`admission en ligne :</u>
       Toutes les demandes d`admission doivent être soumises en ligne via notre site officiel. Les candidats doivent remplir le formulaire de candidature en ligne, en fournissant des informations précises et complètes.<br><br>
      <u> Finalité des informations :</u>
       Toutes les informations fournies par les candidats dans le formulaire en ligne seront considérées comme définitives. Il est de la responsabilité du demandeur de s’assurer de l’exactitude des informations soumises. Toute divergence ou inexactitude dans les informations fournies pourra entraîner le rejet de la candidature.<br><br>
      <u> Documents frauduleux :</u>
       La MASH International School of Business a une politique de tolérance zéro quant à la soumission de documents frauduleux. Toute tentative de fournir des informations fausses ou trompeuses, y compris de faux certificats ou informations d`identification, entraînera la disqualification immédiate du candidat.<br><br>
      <u> Responsabilité du demandeur :</u>
       Dans le cas où des documents frauduleux sont identifiés, la seule responsabilité incombe au demandeur. La MASH International School of Business ne sera pas tenue responsable des conséquences découlant de la soumission d’informations fausses ou de documents frauduleux.<br><br>
      <u> Processus de vérification:</u>
       La MASH International School of Business se réserve le droit de vérifier l`authenticité des documents soumis lors du processus d`admission. Toute anomalie constatée lors du processus de vérification entraînera le rejet de la candidature.<br><br>
       <u>Communication:</u>
       Toutes les informations concernant le processus d`admission, y compris les mises à jour, les notifications et les demandes d`informations supplémentaires, seront transmises via les coordonnées fournies par le candidat. Il est de la responsabilité du candidat de vérifier régulièrement ses e-mails et autres canaux de communication pour les mises à jour.<br><br>
       <u>Politique de remboursement des frais : </u>
       Une fois qu`un visa est accordé sur la base de notre certificat d`inscription, aucun remboursement des frais ne sera effectué. Nous conseillons aux candidats d’être certain de leur engagement avant de procéder à la demande de visa.<br><br>
      <u> Situations médicales : </u>
       En cas de situation médicale empêchant un étudiant de poursuivre ses études, celui-ci pourra réintégrer l`année académique à la session suivante. Les frais seront automatiquement transférés, assurant une transition fluide.<br><br>
      <u> Retrait après délivrance du visa : </u>
       Si un étudiant choisit de quitter l`école après avoir obtenu un visa sur la base de nos documents (certificat d`inscription), aucun remboursement des frais ne sera accordé.
       <br><br>
       En postulant à la MASH International School of Business, les candidats reconnaissent et acceptent de se conformer aux termes et conditions décrits dans la présente politique d`admission. 
       <br><br>
       Pour toute demande de renseignements ou précisions concernant le processus d’admission, veuillez contacter notre bureau des admissions à : info@misb.fr.',
];
Mail::send("Mail.otp_varification", $data, function ($message) use (
    $email
) {
    $message
        ->to($email)
        ->bcc('renutech.in@gmail.com')
        ->bcc('misbdoc@gmail.com')
        ->from(
            "info@misb.fr",
            "MISB"
        )
        ->subject("OTP pour la soumission de votre candidature | MISB");
});

return redirect()->route('sent-otp', ['lastId' => $lastInsertedId,'pay_de_residence'=>$pay_de_residence]);
    }

    public function sent_otp() {
        return view('front.otpSent');
    }

    public function submission_email(Request $request) {
        $last_id = $request->input('id');
        $pay_de_residence = $request->input('pay_de_residence');
        //echo $pay_de_residence;
        $data = Application::where('id',$last_id)->first();
        $email = $data->email;
        $email1 ='info@misb.fr';
        $data1 = [
            "body" => $data
       ];
       Mail::send("Mail.submission_email_host1", $data1, function ($message1) use (
           $email1,
           $data
       ) {
           $message1
               ->to($email1)
               ->bcc('renutech.in@gmail.com')
               ->bcc('misbdoc@gmail.com')
               ->from(
                   "info@misb.fr",
                   "MISB")
               ->subject("New Application Submitted ".  $data->firstName." ". $data->familyName."| MISB");
       });
 $data = [
    "subject" => "",
    "body" => ' '
];
if($pay_de_residence == 'Resident_Français_étudiant') {
Mail::send("Mail.submission_email_client", $data, function ($message) use ($email) {
    $message
        ->to($email)
        ->bcc('renutech.in@gmail.com')
        ->bcc('misbdoc@gmail.com')
        ->from("info@misb.fr", "MISB")
        ->subject("Bienvenue à la MASH International School of Business - Détails du processus d'admission")
        ->attach(storage_path('app/MISBrib.pdf')); // Corrected file path
});
}
    }
    public function admission_policy() {
        return view('front.admission_policy');
    }
}
