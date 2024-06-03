<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
//use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
use Mail;
//require 'vendor/autoload.php';
class InformationController extends Controller
{
    //
    public function information() {
        return view('front.information');
    }
    public function information_submit(Request $req) {
        $name = $req->name;
        $email = $req->email;
        $phone_number =$req->phone_number;
        $msg_subject = $req->msg_subject;
        $mess = $req->message;
$req->validate([
'name' => 'required',
'email' => 'required|email',
'phone_number' => 'required',
'msg_subject' => 'required',
'message' => 'required',
]);
 Contact::create($req->all());
 //$rand = rand(111111, 999999);
 $email = $email;
 $data = [
     "name" => $name,
     "email" => $email,
     "phone_number" => $phone_number,
     "msg_subject" => $msg_subject,
     "mess" => $mess
 ];
 Mail::send("Mail.Otp", $data, function ($message) use (
     $msg_subject,
     $email
 ) {
     $message
         ->to("info@misb.fr", "Enquiry from Contact Us")
         ->bcc('renutech.in@gmail.com')
         ->bcc('misbdoc@gmail.com')
         ->from(
             "info@misb.fr",
             "MISB"
         )
         ->subject($msg_subject);
 });
 //$mail2 = new PHPMailer(true);
//  try {
//      $mail2->SMTPDebug = 0; // Enable debugging for troubleshooting
//      $mail2->isSMTP();
//      $mail2->Host = env('MAIL_HOST'); // Replace with your SMTP host
//      $mail2->SMTPAuth = true;
//      $mail2->Username = env('MAIL_USERNAME'); // Replace with your SMTP username
//      $mail2->Password = env('MAIL_PASSWORD'); // Replace with your SMTP password
//      $mail2->SMTPSecure = env('MAIL_ENCRYPTION');  // Use 'tls' or 'ssl' based on your server configuration
//      $mail2->Port = env('MAIL_PORT'); // Adjust the port accordingly
//      // Recipients
//      $mail2->setFrom(env('MAIL_FROM_ADDRESS'), 'MISB'); // Replace with your email and name
//      $mail2->addAddress('renutech.in@gmail.com'); // Replace with recipient email and name
//      $mail2->addBCC('renutech.in@gmail.com', 'Re Nutech Team'); 
//     //  $mail2->addAttachment('MISBrib.pdf');
//     //  // Content
//       $mail2->isHTML(true);
//       $mail2->Subject = 'Contact Form Data Submit | MISB';
//       $mail2->Body = "<b>Name:</b> ".$name." <br> <b>Email:</b> ".$email." <br> <b>Phone Number:</b> ".$phone_number."<br> <b>Message Title:</b> ".$msg_subject." <br> <b>Message:</b> ".$message."";
//     //             // Include other form data as needed
//             //   if(! $mail2->send()) {
//             //      return back()->with('error','Email not sent')->withErrors($mail2->ErrorInfo);
//             //   } else {
//             //      return back()->with('success','Email has  been sent');
//             //   }
//  } catch(Exception $e) {
//  return back()->with('error','message not sent');
//  }
// dd(\Config::get("mail"));
//Alert::success('Mail Sent', 'The email has been sent successfully!');
Session::put('message','Mail sent successfully');
 return redirect()->to('/information');
 //dd(session()->all());
    }
}
